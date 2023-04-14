<?php
    function conDB($hostname, $username, $password, $database, $port) {
        $conn = mysqli_connect(
            $hostname,
            $username,
            $password,
            $database,
            $port
        );
        return $conn;
    }
?>