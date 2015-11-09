<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start(); // Inicio de sesión
    if(isset($_SESSION['suma'])) {
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
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        if($_SESSION['suma']< 10000){
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
        ?>
    </body>
</html>
