<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 10</title>
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
    </head>
    <body>
        <?php
        $puntuacion = array (
        'as' => 11, 'dos' => 0, 'tres' => 10, 'cuatro' => 0, 'cinco' => 0,
        'seis' => 0, 'siete' => 0, 'sota' => 2, 'caballo' => 3, 'rey' => 4);

        $palo = array ('oros', 'copas', 'bastos', 'espadas');

        $figura = array ('as', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'sota', 'caballo', 'rey');

        $puntosTotales = 0;

        for($i=0; $i<10; $i++){
            do{
                $paloCarta = $palo[rand(0, 3)];
                $figuraCarta = $figura[rand(0, 9)];
                $puntosCarta = $puntuacion[$figuraCarta];
                $nombreCarta = "$figuraCarta de $paloCarta";
            } while (in_array($nombreCarta , $cartasEchadas));
            $cartasEchadas[$i]= $nombreCarta;
            $puntosTotales += $puntosCarta;
            echo "$nombreCarta, con puntuacion de $puntosCarta.<br>";
        }
        echo "<br><b>Total: $puntosTotales puntos</b>";
        ?>
    </body>
</html>
