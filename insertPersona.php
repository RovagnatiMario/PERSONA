<?php
    foreach($_GET as $k=> $v) {
        echo "<p>$k : $v</p>";
    }
    
    foreach($_POST as $k=> $v) {
        echo "<p>$k : $v</p>";
    }
?>