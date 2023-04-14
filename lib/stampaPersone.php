<?php
    include "connessioneDB.php";

    /*
    connessione al database
    creazione query "select * from Scuola"
    lanciare query e salvare risultato
    visualizzare risultato
    */

    function stampaPersone($hostname, $username, $password, $database, $port) {
        $conn = conDB($hostname, $username, $password, $database, $port);
        if(!$conn) {
            echo "<h1>ERRORE, IMPOSSIBILE CONNETTERSI AL DB</h1>";
        } else {
            $query = "select * from Persona";
            $query_run = mysqli_query($conn, $query);
            //visualizzare dati struttura mysql
            //1) verifico se ho dei risultati
            if(mysqli_num_rows($query_run) > 0 ) {
                foreach($query_run as $persona) {
                    echo $persona['nome']. " ". 
                         $persona['cognome']. "...<br>";
                }
            }
        }
    }
?>