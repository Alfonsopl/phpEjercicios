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
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
        for ($i=0; $i<20; $i++){
            $numero[$i] = rand(0,100);
        }
        $indice = 0;
        for ($i=0; $i<20; $i++){          
            if (($numero[$i]%2) == 0) {
                $aux[$indice] = $numero[$i];
                $indice++;
            }
        }
        for ($i=0; $i<20; $i++){
            if (($numero[$i]%2) != 0) {
                $aux[$indice] = $numero[$i];
                $indice++;
            }
        }
        echo "<br>Array original:<br>";
        foreach ($numero as $numero) {
        echo "$numero, ";
        }
        echo "<br>Array pares primero:<br>";
        foreach ($aux as $aux) {
        echo "$aux, ";
        }
        ?>
    </body>
</html>
