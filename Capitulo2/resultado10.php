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
        <title>Ejercicio 10</title>
    </head>
    <body>
        <div>
            <?php
            echo $_POST['mb'], " Mb son ", $_POST['mb'] * 1024, " Kb.";
            ?>
            <br><a href="ejercicio10.php"Volver>Volver</a>
        </div>
    </body>
</html>
