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
        <title>Ejercicio 9</title>
    </head>
    <body>
        <div>
            <?php
            echo "El volumen del cono es de ";
            echo round ( $_POST['altura'] * $_POST["base"] * $_POST["base"] / 4 * 3.1416, $precision = 2), " cm3.";
            ?>
            <br><a href="ejercicio9.php"Volver>Volver</a>
        </div>
    </body>
</html>
