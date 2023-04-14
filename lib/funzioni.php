<?php
    /*$r;
    foreach($_POST as $k => $v) {
        if($v == "addizione") {
            //echo "Il risultato è : ".$_POST["primoValore"] + $_POST["secondoValore"];
       
            $r = $_POST["primoValore"] + $_POST["secondoValore"];
        }

        if($v == "sottrazione") {
     
            $r = $_POST["primoValore"] - $_POST["secondoValore"];
        }

        if($v == "moltiplicazione") {
    
            $r = $_POST["primoValore"] * $_POST["secondoValore"];
        }

        if($v == "divisione") {
      
            $r = $_POST["primoValore"] / $_POST["secondoValore"];
        }
    }
    echo $r;
    */

    function operazione() {
        global $n1;
        global $n2;
        global $operazione
        $r;

        if($operazione == "addizione") {
            //echo "Il risultato è : ".$_POST["primoValore"] + $_POST["secondoValore"];
       
            $r = $n1 + $n2;
        }

        if($operazione == "sottrazione") {
     
            $r = $n1 - $n2;
        }

        if($operazione == "moltiplicazione") {
    
            $r = $n1 * $n2;
        }

        if($operazione == "divisione") {
      
            $r = $n1 / $n2;
        }
        return $r;
    }
?>