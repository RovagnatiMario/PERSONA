<?php
include "lib/funzioni.php";

/*DEFINIZIONE VARIABILI GLOBALI
    global $_variableName
*/
?>

<html>
    <head>
        <title>Calcolatrice</title>
    </head>

    <body>
        <div>
            <h4>Inserisci i valori della calcolatrice</h4>
        </div>

        <div>
            <form action="insertValori.php" method="post">
                <div>
                    <label>Primo Numero</label>
                    <input type="number" name="primoValore" required>
                </div>
                <br>
                <div>
                    <label>Scegli un'operazione</label>
                    <select id="oper" name="operazioni">
                        <option value="addizione">Addizione</option>
                        <option value="sottrazione">Sottrazione</option>
                        <option value="moltiplicazione">Moltiplicazione</option>
                        <option value="divisione">Divisione</option>
                    </select>
                </div>
                <br>
                <div>
                    <label>Secondo Numero</label>
                    <input type="number" name="secondoValore" required>
                </div>
                <br>
                <button type="submit" name="calcolaRisultato">Calcola Risultato</button>
            </form>
        </div>
        <div>
            <h4>RISULTATO</h4>
            <?php

            $n1 = $_POST["primoValore"];
            $n2 = $_POST["secondoValore"];
            $operazione = $_POST["operazioni"];

            echo $_POST["n1"]." ".$_POST["operazioni"]." ".$_POST["n2"]." ".operazione();
            ?>
        </div>
    </body>
</html>