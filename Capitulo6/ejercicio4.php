<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start(); // Inicio de sesión
    
    if (isset($_POST['nombre'])) {
        $_SESSION['entra'] = false;
    }
    
    if (($_POST['nombre'] == "usuario") && ($_POST['contrasena'] == "contrasena")){
        $_SESSION['entra'] = true;
    }
?>


<?php
    if((isset($_POST['numero'])) && ($_SESSION['entra'])) {
       $_SESSION['suma'] += $_POST['numero'];
       $_SESSION['introducidos']++; 
 
    } else {
        $_SESSION['suma'] = 0;
        $_SESSION['introducidos'] = 0;
    }
?>
  
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
        if (!$_SESSION['entra']) {
            echo "<form action='#' method='post'>
                <br>Nombre:
                <input type='text' name='nombre' autofocus>
                <br>Contraseña:
                <input type='text' name='contrasena'>
                <br>
                <input type='submit' value='continuar'>
                </form>";      
        }
        if ($_SESSION['entra']) {
            if($_SESSION['suma'] < 10000){
                echo "<p> Introduce una serie de numeros</p>";
                echo "<form action='#' method='post'>
                    <input type='number' name='numero' value='0' autofocus>
                    <input type='submit' value='continuar'>
                    </form>";         
            } else {
               $media = ($_SESSION['suma']/$_SESSION['introducidos']);
               echo "<br>Numeros introducidos: " , $_SESSION['introducidos'];
               echo "<br> Total acumulado : " , $_SESSION['suma'];
               echo "<br>Media de los numeros introducidos: $media";
            }
        }
        ?>
    </body>
</html>
