<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 16.</title>
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
    </head>
    <body>
        <div>
            <h2>Identificador de númemros primos</h2>
            Introduzca su número: <br>
            <form action="ejercicio16.php" method="post">
              <input type='number'  name='numero' autofocus>
              <input type="submit" value="Comprobar">
            </form>
            <?php
            if (isset($_POST["numero"])){
                $esPrimo = true;    
                $numero = $_POST["numero"];
                for ($i = 2; $i < $numero; $i++) {
                    if (($numero % $i) == 0) {
                        $esPrimo = false;
                    }
                }

                if ($esPrimo) {
                  echo "El número introducido es primo.";
                } else {
                  echo "El número introducido no es primo.";
                }
            }
            ?>
        </div>
    </body>
</html>
