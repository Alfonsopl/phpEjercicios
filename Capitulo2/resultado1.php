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
        <title>Ejercicio 1</title>
    </head>
    <body>
        <div>
            <?php
            echo "El resultado de la multiplicación de estos dos números es ", $_POST['x'] * $_POST['y'];
            ?>
            <br><a href="ejercicio1.php"Volver>Volver</a>
        </div>
    </body>
</html>
