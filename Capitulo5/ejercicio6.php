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
        <title>Ejercicio 6</title>
    </head>
    <body>
        <?php
        $numero = $_POST['numero'];
        $numeroTexto = (!isset($_POST['introducido']))? "" : $_POST['numeroTexto'];
        $introducido = (!isset($_POST['introducido']))? 0 : $_POST['introducido'];
        if ($introducido > 0) {
            $numeroTexto =  $numeroTexto. " ". $numero;
        }
        if ($introducido < 8){ 
            echo "<p>Introduzca el numero ", ($introducido + 1) , ".</p> ";
            echo "<form action='ejercicio6.php' method='post'>";
            echo "<input type='number'  name='numero' autofocus>";
            echo "<input type='hidden' name='introducido' value='" , ($introducido + 1), "'>"; 
            echo "<input type='hidden' name='numeroTexto' value='" , ($numeroTexto), "'>"; 
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
            //print_r(get_defined_vars());
        }
            
        if ($introducido >= 8){
            echo "Los numeros introducidos son:";
            $numeroTexto = substr($numeroTexto, 1, strlen($numeroTexto) - 1);
            $array = explode(" ", $numeroTexto);
            echo "<br>";
            for ($i=0; $i<10; $i++) {
                if (($array[$i]%2) == 0) {
                    echo "<spam style='color:red;'>" . $array[$i] . "</spam><br>";
                } else {
                    echo "<spam style='color:green;'>" . $array[$i] . "</spam><br>";
                }
            }
           // print_r(get_defined_vars());
        }    
        ?>
    </body>
</html>
