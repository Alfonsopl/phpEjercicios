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
        <title>Ejercicio 3</title>
    </head>
    <body>
        <?php
        $numero = $_POST['numero'];
        $numeroTexto = (!isset($_POST['introducido']))? "" : $_POST['numeroTexto'];
        $introducido = (!isset($_POST['introducido']))? 0 : $_POST['introducido'];
        if ($introducido > 0) {
            $numeroTexto =  $numeroTexto. " ". $numero;
        }
        if ($introducido < 15){ 
            echo "<p>Introduzca el numero ", ($introducido + 1) , ".</p> ";
            echo "<form action='ejercicio3.php' method='post'>";
            echo "<input type='number'  name='numero' autofocus>";
            echo "<input type='hidden' name='introducido' value='" , ($introducido + 1), "'>"; 
            echo "<input type='hidden' name='numeroTexto' value='" , ($numeroTexto), "'>"; 
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
            //print_r(get_defined_vars());
        }
            
        if ($introducido >= 15){
            echo "Los numeros introducidos son:";
            $numeroTexto = substr($numeroTexto, 1, strlen($numeroTexto) - 1);
            $array = explode(" ", $numeroTexto);
            foreach ($array as $a){
                echo $a, " ";
            }
            echo "<br>";
            for ($i = 0; $i < 15; $i++) {
                echo $array[$i] , " ";
            }
            
            $aux = $array[0];
            for ($i = 0; $i < 14; $i++) {
                $array[$i] = $array[$i + 1];
            }
            $array[14] = $aux;
            echo "<br> El array rotado:";
            foreach ($array as $a){
                echo $a, " ";
            }
           // print_r(get_defined_vars());
        }    
        ?>
    </body>
</html>
