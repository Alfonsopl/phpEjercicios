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
        <title>Ejercicio 5</title>
    </head>
    <body>
        <style>
            .grafico{

            }
            .mes {
                width: 200px;
                height: 20px;
                float:left;
                display:block;
                
            }
            
            .barra {
                width: 20px;
                height: 20px;
                /*background-color: red;*/
                /*display:block;*/
            }
        </style>
        <?php
        $mes = (!isset($_POST['mes'])) ? 0 : $_POST["mes"];
        $arrayMandar = (!isset($_POST['mes'])) ? "" : $_POST["arrayMandar"];
        $temperatura = (!isset($_POST['temperatura'])) ? -1 : $_POST["temperatura"];
        
        
        if ($mes > 0){
            $arrayMandar = $arrayMandar . " " . $temperatura;
        }
        
        if ($mes < 12) {
            echo "<form action='ejercicio5.php' method='post'>";
            echo "<p>Introduzca la temperatura media de ";
            switch ($mes) {
                case 0:
                    echo "Enero";
                    break;
                case 1:
                    echo "Febrero";
                    break;
                case 2:
                    echo "Marzo";
                    break;
                case 3:
                    echo "Abril";
                    break;
                case 4:
                    echo "Mayo";
                    break;
                case 5:
                    echo "Junio";
                    break;
                case 6:
                    echo "Julio";
                    break;
                case 7:
                    echo "Agosto";
                    break;
                case 8:
                    echo "Septiembre";
                    break;
                case 9:
                    echo "Octubre";
                    break;
                case 10:
                    echo "Noviembre";
                    break;
                case 11:
                    echo "Diciembre";
                    break;
            }
            echo ". </p>";
            echo "<input type='number'  name='temperatura' min='0' autofocus>";
            echo "<input type='hidden'  name='mes' value = '" . ($mes + 1) ."'>";
            echo "<input type='hidden' name='arrayMandar' value='" , ($arrayMandar), "'>"; 
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
        }
        
        if ($mes == 12) {
            $arrayMandar = substr($arrayMandar, 1, strlen($arrayMandar) - 1);
            $array = explode(" ", $arrayMandar);
            /*foreach($arrayMandar as $a){
                echo $a . " ";
            }*/
            echo "<div class='grafico'>";
            for ($i= 0 ; $i<12; $i++){
                echo "<spam class='mes'>";
                switch ($i) {
                case 0:
                    echo "Enero";
                    break;
                case 1:
                    echo "Febrero";
                    break;
                case 2:
                    echo "Marzo";
                    break;
                case 3:
                    echo "Abril";
                    break;
                case 4:
                    echo "Mayo";
                    break;
                case 5:
                    echo "Junio";
                    break;
                case 6:
                    echo "Julio";
                    break;
                case 7:
                    echo "Agosto";
                    break;
                case 8:
                    echo "Septiembre";
                    break;
                case 9:
                    echo "Octubre";
                    break;
                case 10:
                    echo "Noviembre";
                    break;
                case 11:
                    echo "Diciembre";
                    break;
                }
                echo ":</spam>";
                for ($j = 0; $j<= $array[$i]; $j++){
                    echo "<img src='imagenes/rojo.jpg' class='barra'>";
                }
                echo " " . $array[$i] . "Grados. <br>";
            }
            echo "</div>";
            
        }
        ?>
    </body>
</html>
