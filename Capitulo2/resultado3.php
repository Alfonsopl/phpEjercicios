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
        <title>Ejercicio 3</title>
    </head>
    <body>
        <div>
            <?php
            echo $_POST['pesetas'], " pesetas son ", round($_POST['pesetas'] / 166.386, $precision = 2), " euros.";
            ?>
            <br><a href="ejercicio3.php"Volver>Volver</a>
        </div>
    </body>
</html>
