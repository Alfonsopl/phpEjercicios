<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start(); // Inicio de sesión
    if(isset($_SESSION['suma'])) {
        if ($_POST['numero'] > 0){
            $_SESSION['introducidos']++;
            if (esPrimo($_POST['numero'])) {
                $_SESSION['sumaprimos'] += $_POST['numero'];
                $_SESSION['suma']++;
            }
            if (esPar($_POST['numero'])) {
                if ($_POST['numero'] > $_SESSION['mayor']) {
                    $_SESSION['mayor'] = $_POST['numero'];
                }
            }
        }
    } else {
        $_SESSION['sumaprimos'] = 0;
        $_SESSION['suma'] = 0;
        $_SESSION['mayor'] = 0;
        $_SESSION['introducidos'] = 0;
    }
    
    function esPrimo($numero){
        $primo = true;
        for ($i=2; $i<$numero;$i++){
            if ($numero % $i == 0){
                $primo = false;
            }
        }
        return $primo;
    }
    
    function esPar($numero){
       if (($numero % 2) == 0) {
        return true;
       } else {
           return false;
       }
    }
    
    
?>


<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Ejercicio 2</title>
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
           $media = ($_SESSION['sumaprimos']/$_SESSION['suma']);
           echo "<br>Numeros introducidos: " , $_SESSION['introducidos'];
           echo "<br>Media de los primos introducidos: $media";
           echo "<br>Par mas grande: " , $_SESSION['mayor'];
        }
        ?>
    </body>
</html>
