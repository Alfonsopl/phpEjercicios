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
        <title>Ejercicio 4</title>
    </head>
    <body>
        <?php
        $arrayMandar = (!isset($_POST['elegido'])) ? "" : $_POST["arrayMandar"];
        $elegido = (!isset($_POST['elegido'])) ? -1 : $_POST["elegido"];
        $cambiado = (!isset($_POST['cambiado'])) ? -1 : $_POST["cambiado"];
        if ($elegido == -1) {
            for ($i = 0; $i < 100; $i++) {
                    $array[$i] = rand(0,20);
            }
            foreach ($array as $a){
                echo "<spam style='color:green'>" . $a . " </spam>";
            }
            for ($i = 0; $i < 100; $i++) {
                    $arrayMandar = $arrayMandar . " " . $array[$i];
            }
            echo "<form action='ejercicio4.php' method='post'>";
            echo "<p>Eliga un numero a cambiar:</p> ";
            echo "<input type='number'  name='elegido' min='0' autofocus>";
            echo "<p>Eliga que nuevo valor va a ser mostrado</p> ";
            echo "<input type='number'  name='cambiado' min='0'>";
            echo "<input type='hidden' name='arrayMandar' value='" , ($arrayMandar), "'>"; 
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
            
            //print_r(get_defined_vars());
        } else {
            $array = explode(" ", $arrayMandar);
            for ($i = 0; $i < 100; $i++) {
                if ($array[$i] == $elegido){
                    echo "<spam style='color:red'>" . $cambiado . " </spam>";
                } else {
                    echo "<spam style='color:green'>" . $array[$i] . " </spam>";
                }
            }
            
        //print_r(get_defined_vars());
        }
        ?>
    </body>
</html>
