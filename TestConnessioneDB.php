<?php
    include "lib/config.php";
    include "lib/connessioneDB.php";

    $conn = conDB($hostname, $username , $password, $database, $port);
    if(!$conn) {
        echo "<h1>ERRORE, IMPOSSIBILE CONNETTERSI AL DB</h1>";
    } else {
        echo "<h1>Connesso</h1>";
    }
?>