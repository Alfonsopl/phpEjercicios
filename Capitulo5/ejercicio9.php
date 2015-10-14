<!DOCTYPE html
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
        <?php
        
        ///Defino variables
        
        //Numero que introduzco en el array
        $numero = $_POST['numero'];
        //Cadena de texto que convertire en el array
        $numeroTexto = (!isset($_POST['introducido']))? "" : $_POST['numeroTexto'];
        //Contador de formularios enviados
        $introducido = (!isset($_POST['introducido']))? 0 : $_POST['introducido'];
        //Numeros de rotacion
        $numero1 = (!isset($_POST['numero1']))? 0 : $_POST['numero1'];
        $numero2 = (!isset($_POST['numero2']))? 0 : $_POST['numero2'];
        
        
        if (($introducido > 0) && ($introducido < 11)) {
            $numeroTexto =  $numeroTexto. " ". $numero;
        }
        
        
        ///Envio los 10 numeros del array
        if ($introducido < 10){ 
            echo "<p>Introduzca el numero ", ($introducido + 1) , ".</p> ";
            echo "<form action='ejercicio9.php' method='post'>";
            echo "<input type='number' value='0' name='numero' autofocus>";
            echo "<input type='hidden' name='introducido' value='" , ($introducido + 1), "'>"; 
            echo "<input type='hidden' name='numeroTexto' value='" , ($numeroTexto), "'>"; 
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
            //print_r(get_defined_vars());
        }
        
        //Una vez enviado los 10 numeros solicito numeros de rotacion, controlandolos
        if (($introducido >= 10)&&($numero1>=$numero2)){
            //imprimo array
            $preparoArray = substr($numeroTexto, 1, strlen($numeroTexto) - 1);
            $array = explode(" ", $preparoArray); 
            foreach ($array as $imprime){
                echo "$imprime, ";
            }
            //Controlo las dos posiciones
            if (($numero1 >= $numero2) && ($introducido>10)){
                echo "<p> La posición incial tiene que ser menor que el numero a rotar.";
            }
            //formulario
            echo "<form action='ejercicio9.php' method='post'>";
            echo "<p>Eliga posición inicial:.</p> ";
            echo "<input type='number'  name='numero1' min='0' max='8' autofocus>";
            echo "<p>Introduzca el segundo numero a rotar:.</p> ";
            echo "<input type='number'  name='numero2' min='1' max='9' autofocus>";
            echo "<input type='hidden' name='introducido' value='" , ($introducido + 1), "'>"; 
            echo "<input type='hidden' name='numeroTexto' value='" , ($numeroTexto), "'>"; 
            echo "<input type='submit' value='Continuar'>";
            echo "</form>";
            //print_r(get_defined_vars());
        }
        
        
        //Solucion
        if (($introducido > 10)&&($numero1<$numero2)){
            $preparoArray = substr($numeroTexto, 1, strlen($numeroTexto) - 1);
            $array = explode(" ", $preparoArray); 
            $j =0;
            for($i= 0; $i < $numero1; $i++){
                $movido[$j]= $array[$i];
                $j++;
            }
            for($i= $numero2; $i < 10; $i++, $j++){
                $movido[$j] = $array[$i];
            }
            for($i= $numero1; $i < $numero2; $i++, $j++){
                $movido[$j] = $array[$i];
            }
            echo "original <br>";
            foreach($array as $ar){
                echo "$ar, ";
            }
            echo "<br>movido: <br>";
            foreach($movido as $mo){
                echo "$mo, ";
            }
        }
        ?>
    </body>
</html>
