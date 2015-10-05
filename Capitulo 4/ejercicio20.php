<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 20</title>
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
    </head>
    <body>
        <h2>Pinta piramides</h2>
        <div>
            <form action="ejercicio20.php" method="post">
              Carácter:
              <input type='text'  name='caracter' value="*" autofocus> <br>
              Altura:
              <input type='number'min="3" value="5" name='altura'><br>
              <input type="submit" value="Pintar">
            </form>
            <br><br><br>
        </div>
        <div style="text-align: center;">
            <?php
                if (isset($_POST['caracter'])) {
                    $c = $_POST['caracter'];
                    $h = $_POST['altura'];
                    for ( $k = 1; $k <= $h ; $k++) {
                      for ($j= ($h - $k +1) ; $j>1 ; $j--) {
                          echo " "; 
                      }
                      for ($i = 1; $i<=$k ; $i++) {
                        echo $c,  " ";
                      }
                    echo "<br>";
                    }
                }
            ?>
        </div>
    </body>
</html>
