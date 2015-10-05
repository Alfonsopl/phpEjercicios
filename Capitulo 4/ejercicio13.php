<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Ejercicio 13</title>
    </head>
    <body>
        <?php
        $introducidos = (!isset($_POST["introducido"])) ? 0 : $_POST['introducido'];
        $numero = (!isset($_POST["numero"])) ? 0 : $_POST['numero'];
        if (!isset($_POST["introducido"])) {
            $positivos = -1;
            $negativos = 0;
        } else {
            $positivos = $_POST["positivos"];
            $negativos = $_POST["negativos"];
        }

        if ($introducidos < 10) {
            echo "<p>Introduzca una serie de numeros:</p> ";
            echo "<form action='ejercicio13.php' method='post'>";
            echo "<input type='number'  name='numero' autofocus>";
            echo "<input type='hidden' name='introducido' value='" , ($introducidos +1), "'>";
            if ($numero >= 0){ 
                echo "<input type='hidden' name='positivos' value='" , ($positivos +1), "'>";
                echo "<input type='hidden' name='negativos' value='" , ($negativos), "'>";
            } else if (($numero < 0)){
                echo "<input type='hidden' name='negativos' value='" , ($negativos +1), "'>";
                echo "<input type='hidden' name='positivos' value='" , ($positivos), "'>";
            }
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
        } else {
            if ($numero >= 0){ 
             $positivos +=1;
            } else if(($numero < 0)){
                $negativos +=1 ;
            }
            echo "Ha introducido ", $positivos, " numeros positivos y ", $negativos , " negativos.";
        }
        ?>
    </body>
</html>
