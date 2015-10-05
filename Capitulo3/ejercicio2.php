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
        Por favor, introduzca que hora es::
        <form action="resultado2.php" method="post">
          Hor:<input type="number" name="hora" autofocus min="0" max="23" step="1" value="0">
          Min:<input type="number" name="minuto" autofocus min="0" max="59" step="1" value="0"><br>
          <input type="submit" value="Aceptar">
        </form>
      </div>
    </body>
</html>
