<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 9</title>
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
    </head>
    <body>
        <?php
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];
		
            if (($a == 0) && ($b == 0) && ($c == 0)) { 
                echo "La ecuación tiene infinitas soluciones.";
            }
		
            if (($a == 0) && ($b == 0) && ($c != 0)) {
		echo "La ecuación no tiene solución.";
            }
   
            if (($a != 0) && ($b != 0) && ($c == 0)) {
                echo "x1 = 0", "<br>";
                echo "x2 = ", (-$b / $a);
            }

            if (($a == 0) && ($b != 0) && ($c != 0)) {
		echo "x1 = x2 = ", (-$c / $b);
            } 
            
            if (($a != 0) && ($b == 0)) {
                
            echo "entra a !=0 <br>";
		if (($a/$c) >= 0) {
                    echo "x1 = ", sqrt($a/$c);
                    echo "x2 = -", sqrt($a/$c);
                } else {
                echo "La ecuación no tiene soluciones reales";
            }
            }
            	
            if (($a != 0) && ($b != 0) && ($c != 0)) {	
                echo "entra<br>";
		$discriminante = $b*$b - (4 * $a * $c);
		if ($discriminante < 0) {
                    echo ("La ecuación no tiene soluciones reales");
		} else {
                    echo "x1 = " , -$b + sqrt($discriminante)/(2 * $a) , "<br>";
                    echo "x2 = " , -$b - sqrt($discriminante)/(2 * $a) , "<br>";
                 }
            }
        ?>
    </body>
</html>
