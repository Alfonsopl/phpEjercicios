<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 13</title>
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
    </head>
    <body>
        <?php
        $minimo = PHP_INT_MAX;
        
        $i = 0;
        while ($i < 54){
            $numero = rand(1,55);
            if (!in_array($numero , $matrizuni)){
                $matrizuni[$i] = $numero;
                $i++;
            }
        }
        
        //var_dump($matrizuni);
        for ($i = 0; $i < 54; $i++){
            echo "$matrizuni[$i], ";
        }
        echo "<br><br>";
        $indice = 0;
        for ($y = 0; $y < 9; $y++){
            for ($x = 0; $x < 6; $x++){
                $matriz[$y][$x] = $matrizuni[$indice];
                echo " $indice , " , $matrizuni[$indice];
                echo " --> " . $matriz[$y][$x], " ";
                $indice++;
                if ($matriz[$y][$x] < $minimo) {
                    $minimoy = [$y];
                    $minimox = [$x];
                    $minimo = $matriz[$y][$x];
                }
            }
        }
        
        
        echo "<br><br>";
       //print_r(get_defined_vars());
        for ($y = 0; $y < 9; $y++){
            for ($x = 0; $x < 6; $x++){
                //if ($matriz[$y][$x]== $minimo) {
                //echo "<span style='color:blue'>" , $matriz[$x][$y], "</spam>, ";
                //}
                echo $matriz[$y][$x], ", ";
            }
            echo "<br>";
        }
        ?>
    </body>
</html>
