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
        <title>Ejercicio 2</title>
    </head>
    <body>
        <div>
            <?php
            echo $_POST['euros'], " euros son ", round($_POST['euros'] * 166.386), " pesetas.";
            ?>
            <br><a href="ejercicio2.php"Volver>Volver</a>
        </div>
    </body>
</html>
