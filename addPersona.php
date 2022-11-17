<?php
//Il tag name nel momento in cui spedisco le informazioni vengono inserite in un array associativo e poi inviate nella pagina dell'action
//a lato pratico ciò che riceve è l'informazione
//Ci sono due modi per spedire l'informazione : metodo get che accoda le informazioni sottoforma di chiave di informazione nell'url della pagina
//la sua limitazione è che il numero di una pagina ha una lunghezza limitata e di solito si utilizzano quando voglio richiedere delle informazioni
//metodo post, ovvero un altro array associativo in cui le infromazioni vengono inserite nell'header della pagina e quindi incapsulate le infromazioni della post
//entrambi sono metodi poco sicuri e anche nel post le informazioni sono visibili se i pacchetti spediti non sono cifrati, con la differenza con il get che devo aprire il post
//sul discorso sicurezza fanno poco
//visto che le infromazioni devono avere una chiave, input dice che esiste un input, type indica il tipo dell'input, il name rappresenta la chiave a cui è assocaito il valore
//che l'utente inserisce, quindi se lascio lo stesso name dappertutto non riesco più a recuperare le varie informazioni. l'ID si riferisce invece al foglio di stile CSS
//la parola required è un vincolo HTML che forza l'inserimento dei dati e se vogliamo essere sicuri che l'utente abbia inserito almeno un dato, se esso viene posto alla 
//fine del form esso non basta

//Il punto di domanda indica che dopo diesso ci saranno tutti i valori acquisiti, i quali saranno divisi dalla &
?>

<html>
    <head>
        <title>Crea Persona</title>
    </head>

    <body>
        <div>
            <h4>Inserisci una persona</h4>
            <a href="index.php">Home</a>
        </div>

        <div>
            <form action="insertPersona.php" method="post">
                <div>
                    <label>Nome</label>
                    <input type="text" name="nome" required>
                </div>

                <div>
                    <label>Cognome</label>
                    <input type="text" name="cognome" required>
                </div>

                <div>
                    <label>Codice Fiscale</label>
                    <input type="text" name="cf" required>
                </div>

                <div>
                    <label>Indirizzo</label>
                    <input type="text" name="indirizzo">
                </div>

                <div>
                    <label>Telefono</label>
                    <input type="text" name="tel">
                </div>

                <button type="submit" name="crea_persona">Crea Persona</button>
            </form>
        </div>
    </body>
</html>

