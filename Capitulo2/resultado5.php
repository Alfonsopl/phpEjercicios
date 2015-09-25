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
        <title>Ejercicio 5</title>
    </head>
    <body>
        <div>
            <?php
            echo "el area del rectángulo es de ";
            echo $_POST['ancho'] * $_POST["alto"], " cm2.";
            ?>
            <br><a href="ejercicio5.php"Volver>Volver</a>
        </div>
    </body>
</html>
