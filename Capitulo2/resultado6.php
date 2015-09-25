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
        <title>Ejercicio 6</title>
    </head>
    <body>
        <div>
            <?php
            echo "El area del triángulo es de ";
            echo $_POST['altura'] * $_POST["base"] / 2, " cm2.";
            ?>
            <br><a href="ejercicio6.php"Volver>Volver</a>
        </div>
    </body>
</html>
