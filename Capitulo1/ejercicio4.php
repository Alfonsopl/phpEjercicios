<!DOCTYPE html>
<!--
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="estilo1.css" />
    </head>
    <body>
        <?php
        echo "<table><tr><th></th><th>LUNES</th><th>MARTES</th><th>MIERCOLES</th><th>JUEVES</th><th>VIERNES</th></tr>";
        ?>
        <tr><td>1</td><td>DEWS</td><td>DEWC</td><td>DEWS</td><td>DEWC</td><td>DIW</td></tr>
        <?php
        echo "<tr><td>2</td><td>DEWS</td><td>DEWC</td><td>DEWS</td><td>DEWC</td><td>DIW</td></tr><tr><td>3</td><td>DEWS</td><td>DEWC</td><td>DEWS</td><td>DEWC</td><td>DIW</td></tr><tr><td colspan='6'></td></tr>";
        ?>
        <tr><td>4</td><td>EINEM</td><td>DAW</td><td>HLC</td><td>EINEM</td><td>DIW</td></tr>
        <tr><td>5</td><td>DIW</td><td>DAW</td><td>HLC</td><td>EINEM</td><td>DWES</td></tr>
        <tr><td>6</td><td>DIW</td><td>DAW</td><td>HLC</td><td>EINEM</td><td>DWES</td></tr>
        <?php
          echo  "</table>"
        ?>
    </body>
</html>
