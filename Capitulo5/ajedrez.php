<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="newcss.css" rel="stylesheet" type="text/css" />
    <title>Ajedrez</title>
  </head>
  <body>
    <?php
    $x = 0;
    $i = 0;
    $j = 0;
    $y = 0;
    $posiciony;
    //generamos array
    for($x = 0; $x < 8; $x++) {
      for($y = 0; $y < 8; $y++) {
        $tablero[$x][$y] = 0;
      }
    }
    //posicion del alfil dentro del tablero
    $i = ($_POST["numero"] -1);
    $j = ($_POST["letra"]);
    $tablero[$i][$j] = 1;
    //recorremos array dando posiciones
    $x = i;
    $y = j;
    for($x = 0; $x < 8; $x++) {
			for($y = 0; $y < 8; $y++) {
				if ((abs($i - $x) == abs($j - $y)) && (!(($i == $x) && ($j == $y))))
						$tablero[$x][$y] = 2;
			}
		}
     echo "<table>";
     for($x = 0; $x < 8; $x++) {
       echo "<tr class='x" , $x , "'>";
      for($y = 0; $y < 8; $y++) {
        echo "<td class='y" , $y , "'>";
        if ($tablero[$x][$y] == 1)
          echo "<img src='alfil1.png'>";
        if ($tablero[$x][$y] == 2)
          echo "<img src='alfil2.png'>";
        echo "</td>";
      }
      echo "</tr>";
     }
     echo "</table>";
    
    ?>
    
    <?php  
      function multiploPar($n) {
        if (n % 2 != 0)  {
            return false;
        }
        return true;
        }
  ?>
  </body>
  
</html>