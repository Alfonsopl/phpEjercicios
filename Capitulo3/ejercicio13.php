<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <h2>Ordenador de númemros</h2>
        Introduzca tres números y te los ordeno: <br>
        <form action="ejercicio13.php" method="post">
          <input type="number" name="a" step="1">
          <input type="number" name="b" step="1">
          <input type="number" name="c" step="1">
          <input type="submit" value="Ordenar">
        </form>
        <?php
            if(isset($_POST['a'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];
                
                   $primero = ($a < $b) ? (($a < $c) ? $a : $c) : (($b < $c)? $b : $c);
                   $segundo = ($a > $b) ? (($b < $c) ? $a : $c) : (($b < $c) ? $b : $c); 
                   $tercero = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c); 
                   echo $primero , " ", $segundo, " ", $tercero;
                /*
                // ordenación de los dos primeros números
                
                if ($a > $b) { $aux = $a; $a = $b; $b = $aux;}
                // ordenación de los dos últimos números
                if ($b > $c) {
                  $aux = $b;
                  $b = $c;
                  $c = $aux;
                }
                // se vuelven a ordenar los dos primeros
                if ($a > $b) {
                  $aux = $a;
                  $a = $b;
                  $b = $aux;
                }
                echo "Los números introducidos ordenados de menor a mayor son $a, $b y $c."; 
            */        
            }
        ?>
	</div>
    </body>
</html>
