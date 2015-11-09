<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Introducción</title>
    </head>
    <body>
        <?php
        ?>
        <h3>Nueva palabra</h3>
        <form action="ejercicio8.php" method="post">
          <input type="hidden" name="ejercicio" value="08_admin_palabras">
          Español: <input type="text" name="espanol" autofocus=""><br>
          Inglés: <input type="text" name="ingles"><br>
          <input type="submit" name="accion" value="Introducir">
        </form>
        
        <br><br>
        <h3>Palabras introducidas:</h3>
        <table>
            <tr><th>Ingles</td><td>Español</td> </tr>
        <?php
        foreach($_COOKIE as $nombre => $valor){
            echo "<tr><td> $nombre </td><td> $valor </td></tr>";
        }
        ?>
        </table>
        <form action="ejercicio8.php" method="post">
          <input type="submit" name="borra" value="Borrar todas las palabras">
        </form>
    </body>
</html>
