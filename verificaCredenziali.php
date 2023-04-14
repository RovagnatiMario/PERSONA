<?php
    include "lib/config.php";
    include "lib/connessioneDB.php";

    if((isset($_POST["username"])) && ((isset($_POST["password"])))) {
        if($conn = conDB($hostname, $username , $password, $database, $port)) {
            $sql = "Select * From Persona";
            $query_run = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($query_run) >0) {   
                $trovato = false;                       
                foreach($query_run as $persona) {
                    if(($_POST["username"] == $persona['username']) && ($_POST["password"] == $persona['passw'])) {
                        echo "<p>Login Effettuato</p>";
                        $trovato = true;
                    } 
                }

                if(!$trovato) {
                    echo "<p>Non esistono utenti con i dati inseriti</p>";
                }
            } else {
                die("NON ci sono Persone");
            }
        } else {
            die('Connection Failed : '.$conn->connect_error);
        }
    }
?>