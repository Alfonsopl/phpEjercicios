<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 2</title>
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
    </head>
    <body>
        <?php
        $numero = $_POST['numero'];
        $numeroTexto = (!isset($_POST['introducido']))? "" : $_POST['numeroTexto'];
        $introducido = (!isset($_POST['introducido']))? 0 : $_POST['introducido'];
        if ($introducido > 0) {
            $numeroTexto =  $numeroTexto. " ". $numero;
        }
        if ($introducido < 10){ 
            echo "<p>Introduzca el numero ", ($introducido + 1) , ".</p> ";
            echo "<form action='ejercicio2.php' method='post'>";
            echo "<input type='number'  name='numero' autofocus>";
            echo "<input type='hidden' name='introducido' value='" , ($introducido + 1), "'>"; 
            echo "<input type='hidden' name='numeroTexto' value='" , ($numeroTexto), "'>"; 
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
            //print_r(get_defined_vars());
        }
            
        if ($introducido >= 10){
            echo "Los numeros introducidos son:";
            $numeroTexto = substr($numeroTexto, 1, strlen($numeroTexto) - 1);
            $array = explode(" ", $numeroTexto);
            $max = max($array);
            $min = min($array); 
            echo "<br>";
            for ($i=0; $i<10; $i++) {
                echo "<br>", $array[$i] , " ";
                if ($array[$i] == $max) {
                    echo " Máximo del array";
                }
                if ($array[$i] == $min) {
                    echo " Mínimo del array";
                }
            }
           // print_r(get_defined_vars());
        }    
        ?>
    </body>
</html>
