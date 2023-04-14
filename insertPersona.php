<?php
    include "lib/config.php";
    include "lib/connessioneDB.php";

    if(isset($_POST["nome"]) && 
    isset($_POST["cognome"]) &&
    isset($_POST["cf"])) {
        echo "Corretto";
    } else {
        echo"MESSAGGIO DI ERRORE";
    }
?>