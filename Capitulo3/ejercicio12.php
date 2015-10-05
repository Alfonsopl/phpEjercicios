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
        <title>Ejercicio 12</title>
    </head>
    <body>
        <h2> Cuestionario sobre clase</h2>
        <p>Bienvenido al cuestionario de clase, por favor elija las respuestas correctas
            para saber su puntuación</p>
        <form action="ejercicio12.php" method="post">
            <p> Esta es la pregunta 1<br>
            <input type="radio" name="p1" value="1" checked> Esta es la respuresta Verdadera<br>
            <input type="radio" name="p1" value="0"> Esta es la respuresta falsa<br>
            <input type="radio" name="p1" value="0"> Esta es la respuresta falsa<br>
            </p>
            <p> Esta es la pregunta 2<br>
            <input type="radio" name="p2" value="1" checked> Esta es la respuresta Verdadera<br>
            <input type="radio" name="p2" value="0"> Esta es la respuresta falsa<br>
            <input type="radio" name="p2" value="0"> Esta es la respuresta falsa<br>
            </p>
            <p> Esta es la pregunta 3<br>
            <input type="radio" name="p3" value="1" checked> Esta es la respuresta Verdadera<br>
            <input type="radio" name="p3" value="0"> Esta es la respuresta falsa<br>
            <input type="radio" name="p3" value="0"> Esta es la respuresta falsa<br>
            </p>
            <p> Esta es la pregunta 4<br>
            <input type="radio" name="p4" value="0" checked> Esta es la respuresta falsa<br>
            <input type="radio" name="p4" value="0"> Esta es la respuresta falsa<br>
            <input type="radio" name="p4" value="1"> Esta es la respuresta verdera<br>
            </p>
            <input type="hidden" name ="comprueba" value="1">
            <input type="submit" value="Enviar">
            </form>
           
            <?php
                if(isset($_POST['p1'])) {
                $resultado = $_POST['p1'] + $_POST['p2'] + $_POST['p3'] + $_POST['p4'];
                echo "Su putuación es de " , $resultado, " puntos.";
                }
            ?>
    </body>
</html>
