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
        <title>Ejercicio 4</title>
    </head>
    <body>
        <div id="content">
            <?php
            $x = $_POST['x'];
            $y = $_POST['y'];
            echo $x, " + ", $y, " = ", $x+$y, "<br>";
            echo $x, " - ", $y, " = ", $x-$y, "<br>";
            echo $y, " - ", $x, " = ", $y-$x, "<br>";
            echo $x, " * ", $y, " = ", $x*$y, "<br>";
            echo $x, " / ", $y, " = ", round($x/$y, $precision = 2), "<br>";
            echo $y, " / ", $x, " = ", round($y/$x, $precision = 2);
            ?>
            <br><a href="ejercicio4.php"Volver>Volver</a>
        </div>
    </body>
</html>
