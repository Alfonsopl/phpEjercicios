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
        <title>Ejercicio 11</title>
    </head>
    <body>
        <div>
            <?php
            echo  $_POST['kb'], " Kb son ", round($_POST['kb'] / 1024, $precision = 2), " Mb.";
             ?>
            <br><a href="ejercicio11.php"Volver>Volver</a>
        </div>
    </body>
</html>
