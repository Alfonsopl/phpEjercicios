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
        <title>Ejercicio 7</title>
    </head>
    <body>
        <div style="text-align: center;">
        <?php
        
        
            if (!isset($_POST['intent'])) {
            $numeroIntroducido = 55555;
            $intentos = 4;
            } else {
            $intentos = $_POST['intent'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
            }
            $convinacion = 1234;
            if ($convinacion != $numeroIntroducido){
                echo "<div><img src='imagenes/cajaCerrada.jpg'  alt='Caja cerrada' style='width:300px;height:300px;'></div>";
            }
            if ($convinacion == $numeroIntroducido){
                echo "<div><img src='imagenes/cajaAbierta.jpg'  alt='Caja cerrada' style='width:300px;height:300px;'></div>";
            }
            if (($intentos > 0) && ($convinacion != $numeroIntroducido)) {
                echo "Introduzca la clave de la caja fuerte";
                echo "<form action='ejercicio7.php' method='post'>";
                echo "<input type='number' min='0' max='9999' name='numeroIntroducido' autofocus>";
                echo "<input type='hidden' name='intent' value='" , ($intentos - 1), "'>";
                echo "<input type='submit' value='Continuar'>";
                echo "</form>";
            }
            if ($convinacion == $numeroIntroducido){
                echo "!Enhorabuena, la caja fuerte se ha abierto!";
            }
            if (($convinacion!= $numeroIntroducido) && ($intentos > 0) && ($intentos != 4)) {
                echo "Clave incorrecta, le quedan ", $intentos , " intentos";
            }
            if (($convinacion!= $numeroIntroducido) && ($intentos <= 0)) {
                echo "Clave incorrecta, lo siento mucho, ha agotado todos sus intentos.";
            }
        ?>
        </div>
    </body>
</html>
