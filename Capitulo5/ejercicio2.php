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
        $introducido = (!isset($_POST['introducido']))? 0 : $_POST['introducido'];
        $introducido = (!isset($_POST['introducido']))? 0 : $_POST['introducido'];
            if ($introducido < 10){ 
                echo "<p>Introduzca el numero ", ($introducido + 1) , ".</p> ";
                echo "<form action='ejercicio2.php' method='post'>";
                echo "<input type='number'  name='numero' autofocus>";
                echo "<input type='hidden' name='introducido' value='" , ($introducido + 1), "'>"; 
                echo "<input type='submit' value='Continuar'>";
                echo "</form>";
            }
            if (($introducido > 0) && ($introducido <= 10)) {
            $numero[$introducido - 1] = $_POST['numero'];
            }
            /*if ($introducido >= 10){
                foreach ($numero as $elemento) {
                    echo $elemento, "<br>";
                }
            }*/
            if ($introducido >= 10){
                for ($i; $i>10; $i++) {
                    echo $numero[$i], "<br>";
                }
                
            }
        ?>
    </body>
</html>
