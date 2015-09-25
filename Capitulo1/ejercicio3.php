<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table>
de HTML
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo1.css" />
    </head>
    <body>
        <?php
        echo "<table><tr><th>Palabra en ingles</th><th>traducción</th></tr>";
        ?>
        <tr><td>Car</td><td>Coche</td></tr>
        <?php
        echo "<tr><td>House</td><td>Casa</td></tr><tr><td>School</td><td>Escuela</td></tr>";
        ?>
        <tr><td>Table</td>
        <?php    
        echo "<td>mesa</td></tr>",
             "<tr><td>House</td><td>Casa</td></tr><tr><td>School</td><td>Escuela</td></tr>";
        ?>
        <tr><td>Baloon</td><td>Globo</td></tr><tr><td>Pen</td><td>Bolígrafo</td></tr>
        <?php
        echo "<tr><td>Chair</td><td>Silla</td></tr><tr><td>Lamp</td><td>Lámpara</td></tr>";
        ?>
        </table>
    </body>
</html>
