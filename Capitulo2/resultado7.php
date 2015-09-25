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
        <div>
            <?php
            echo "El total de la factura es de";
            echo round($_POST['baseImponible'] * 1.21, $precision = 2);
            echo " euros.";
            ?>
            <br><a href="ejercicio7.php"Volver>Volver</a>
        </div>
    </body>
</html>
