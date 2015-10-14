<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
    </head>
    <body>
        <?php
        $numero = new SplFixedArray(20);  /// No funciona al inicialicar arrays.
        $cuadrado = new SplFixedArray(20);
        $cubo = new SplFixedArray(20);
        for ($i=0; $i<20; $i++){
            $numero[$i] = rand(0,100);
        }
        for ($i=0; $i<20; $i++){
            //$cuadrado[$i] = $numero[$i] * $numero[$i];
            $cuadrado[$i] = pow($numero[$i], 2);
        }
        for ($i=0; $i<20; $i++){
            $cubo[$i] = pow($numero[$i], 3);
         }
        echo "<table><tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
        for ($i=0; $i<20; $i++){
            echo  "<tr><td>" , $numero[$i], "</td><td> " , $cuadrado[$i], "</td><td> " , $cubo[$i] , "</td></tr>";
        }
        echo "</table>";
        ?>
    </body>
</html>
