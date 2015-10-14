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
        <title></title>
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
            echo "<form action='ejercicio8.php' method='post'>";
            echo "<input type='number'  name='numero' autofocus>";
            echo "<input type='hidden' name='introducido' value='" , ($introducido + 1), "'>"; 
            echo "<input type='hidden' name='numeroTexto' value='" , ($numeroTexto), "'>"; 
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
            //print_r(get_defined_vars());
        }
            
        if ($introducido >= 10){
            $numeroTexto = substr($numeroTexto, 1, strlen($numeroTexto) - 1);
            $array = explode(" ", $numeroTexto); 
            $indice = 0;
            for ($i=0; $i<10; $i++){          
                if (esPrimo($array[$i])) {
                    $aux[$indice] = $array[$i];
                    $indice++;
                }
            }
            for ($i=0; $i<10; $i++){
                if (!esPrimo($array[$i])) {
                    $aux[$indice] = $array[$i];
                    $indice++;
                }
            }
            echo "<br>Array original:<br>";
            foreach ($array as $numero) {
            echo "$numero, ";
            }
            echo "<br>Array primos primero:<br>";
            foreach ($aux as $numero2) {
            echo "$numero2, ";
            }
           // print_r(get_defined_vars());
        }
        //Defino la funcion esPrimo que he utilizado durante todo el programa
        function esPrimo($entrada){
            $esPrimo = true;    
            for ($i = 2; $i < $entrada; $i++) {
                if (($entrada % $i) == 0) {
                    $esPrimo = false;
                }
            }
            return $esPrimo;
        }
        ?>
    </body>
</html>
