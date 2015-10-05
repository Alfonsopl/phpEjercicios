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
        <title>Ejercicio 2</title>
    </head>
    <body>
        <?php
            $hora = $_POST['hora'];
            $minuto = $_POST['minuto'];
            echo "Son las ";
            if ($hora < 10) echo "0";
            echo $hora, ":";
            if (min < 10) echo "0";
            echo $minuto, "<br>";
            if ($hora > 5 && $hora <= 12) {
                echo "Buenos días!";
            }else if ($hora > 12 && $hora <= 20){
                echo "Buenas tardes!";
            } else {
                echo "Buenas noches!";
            }
        ?>
    </body>
</html>
