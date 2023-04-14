<html>
    <head>
        <title>LogIn</title>
    </head>

    <body>
        <div>
            <h4>Login</h4>
        </div>

        <div>
            <form action="verificaCredenziali.php" method="post">
                <div>
                    <label>username</label>
                    <input type="text" name="username" required>
                </div>

                <div>
                    <label>password</label>
                    <input type="password" name="password" required>
                </div>

                <button type="submit" name="verifica">Login</button>
            </form>
        </div>
    </body>
</html>



<?php

?>