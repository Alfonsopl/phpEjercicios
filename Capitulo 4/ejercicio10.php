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
        <title>Ejercicio 10</title>
    </head>
    <body>
        <div>
        <?php
        $introducidos = (!isset($_POST["introducido"])) ? 0 : $_POST['introducido'];
        $numero = (!isset($_POST["numero"])) ? 0 : $_POST['numero'];
        $suma = (!isset($_POST['suma'])) ? 0 : $_POST['suma'];      
        if ($numero >= 0) {
            echo "<p>Introduzca una serie de numeros positivos, para acabar introduzca un numero negativo.</p> ";
            echo "<form action='ejercicio10.php' method='post'>";
            echo "<input type='number'  name='numero' autofocus>";
            echo "<input type='hidden' name='introducido' value='" , ($introducidos +1), "'>";
            if ($numero >= 0) {
              echo "<input type= 'hidden' name='suma' value='" , ($suma + $numero),"'>";  
            } else {
              echo "<input type= 'hidden' name='suma' value='" , $suma ,"'>";  
            }
            
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";   
        }
            if ($_POST['numero'] < 0) {
                echo "<br>La suma de los numeros introducidos es de " , $suma;
                echo "<br>Se han introducido un total de " , $introducidos -1 , " numeros.";
                echo "<br>La media de los numero es de " , $suma / ($introducidos -1), ".";
            }
        ?>
        </div>
    </body>
</html>
