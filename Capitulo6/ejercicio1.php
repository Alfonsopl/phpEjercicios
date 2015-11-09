<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start(); // Inicio de sesión
    if(isset($_SESSION['visitas'])) {
    $_SESSION['visitas']++;
    $_SESSION['suma'] +=  $_POST['numero'];
    } else {
    $_SESSION['visitas'] = 0;
    $_SESSION['suma'] = 0;
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php
        if($_POST['numero']>=0){
            echo "<p> Introduce una serie de numeros, para cabar introduce uno negativo</p>";
            echo "<form action='#' method='post'>
                <input type='number' name='numero' value='0' autofocus>
                <input type='submit' value='continuar'>
                </form>";         
        } else {
           $media = ($_SESSION['suma']/$_SESSION['visitas']);
           echo "Media introducida: $media";
           
        }
        ?>
    </body>
</html>
