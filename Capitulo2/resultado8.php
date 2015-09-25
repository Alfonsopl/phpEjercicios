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
        <title>Ejercicio 8</title>
    </head>
    <body>
        <div>
            <?php
            echo "El salario a recibir es de ";
            echo $_POST["horas"] * 12, " euros";
            ?>
            <br><a href="ejercicio8.php"Volver>Volver</a>
        </div>
    </body>
</html>
