<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba</title>
    </head>
           <body>
        <?php
        //////////////////////////////////////DECLARACION DE VARIABLES/////////////////////////////////////////////
            //////////////////// ARRAY ASOCIATIVO DICCIONARIO/////////////////////
            $diccionario = array (
            'uno' => "one", 'casa' => "house", 'perro' => "dog", 'gato' => "cat", 'mesa' => "table",
            'silla' => "chair", 'coche' => "car", 'puerta' => "door", 'pan' => "bread", 'rey' => "king",
            'rojo' => "red", 'azul' => "blue", 'caballo' => "horse", 'profesor' => "teacher", 'libro' => "book",
            'arco' => "bow", 'cesta' => "basket", 'navidad' => "christmast", 'carne' => "meat", 'pelicula' => "movie" );
            
            foreach($_COOKIE as $nombre => $valor){
                if (($nombre!="color")&&($nombre!="PHPSESSID")){
                    $diccionario[$valor] = $nombre ;
                }
            }
            //////////////// ARRAY CON INDICES NUMERICOS Y PALABRAS EN ESPANOL//////
            foreach($diccionario as $clave => $valor){
                $palabrasEspanol[]= $clave;
            }
            ////////////// ARRAY MISMO INDICES NUMERICOS Y PALABRAS EN INGLES////
            foreach($diccionario as $clave => $valor){
                $palabrasIngles[]= $valor;
            }
            //////VAFRIABLE ALEATORIA PARA ELEGIR PALABRA EN ESPAÑOL
            $palabraAleatoria = rand(0,(count($diccionario)));
            /////// NUMERO DE PALABRAS INTRODUCIDAS, SI NO HA SIDO ENVIADA SERA = A 0//////////
            $introducido = (!isset($_POST['introducido']))? 0 : $_POST['introducido'];
            /////// PUNTUACION TOTAL, SI NO HA SIDO ENVIADA SERA = A 0//////////
            $puntuacion = (!isset($_POST['puntuacion']))? 0 : $_POST['puntuacion'];
            
            
                        ////////////INICIO PROGRAMAS///////////////////
 ////////////CONTROLO, EN CASO DE QUE SE HAYA ENVIADO NUMERO QUE SI S HA ACERTADO LA PUNTUACION AUMENTE////////
            if ($introducido > 0) {
                $aleatorio = $_POST['aleatorio'];
                $palabra = $_POST['palabra'];
                if ($palabrasEspanol[$aleatorio] == $palabra){
                    $puntuacion++;
                }
            }
            
    /////////////////////////SI AUN QUEDAN PALABRAS POR INTRODUCIR SEGUIRE ENVIANDO EL FORMULARIO////////////////
            if ($introducido < 5) {
                echo "<p>Palabra numero ", ($introducido + 1) , ".</p> ";
                echo "<p>Introduzca la traduccion de la palabra $palabrasIngles[$palabraAleatoria] </p>";
                echo "<form action='#' method='post'>";
                echo "<input type='name' name='palabra' autofocus>";
                echo "<input type='hidden' name='introducido' value='" , ($introducido + 1), "'>";
                echo "<input type='hidden' name='aleatorio' value='" , $palabraAleatoria , "'>";  
                echo "<input type='hidden' name='puntuacion' value='" , $puntuacion , "'>";  
                echo "<input type='submit' value='Continuar'>";
                echo "</form>";
            }
    ////////////////// CUANDO ACABO LAS 5 PALBRAS EL PROGRAMA ME MUESTRA LA PUNTUACION///////////////////
            if ($introducido == 5) {
                echo "Ha acertado $puntuacion palabras.";
            }
        ?>
               <hr><br><br>
               <a href="ejercicio8.php">Volver</a>
    </body>
</html>
