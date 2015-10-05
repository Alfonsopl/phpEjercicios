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
        for ($i=0; $i<20; $i++){
            $numero[$i] = rand(0,100);
        }
        for ($i=0; $i<20; $i++){
            $cuadrado[$i] = $numero[$i] * $numero[$i];
        }
        for ($i=0; $i<20; $i++){
            $cubo[$i] = $cuadrado[$i] * $numero[$i];
        }
        
        for ($i=0; $i<20; $i++){
            echo $numero[$i], " " , $cuadrado[$i], " " , $cubo[$i] , "<br>";
        }
        
        ?>
    </body>
</html>
