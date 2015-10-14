<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 11</title>
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
    </head>
    <body>
        <?php
            $diccionario = array (
            'uno' => "one", 'casa' => "house", 'perro' => "dog", 'gato' => "cat", 'mesa' => "table",
            'silla' => "chair", 'coche' => "car", 'puerta' => "door", 'pan' => "bread", 'rey' => "king",
            'rojo' => "red", 'azul' => "blue", 'caballo' => "horse", 'profesor' => "teacher", 'libro' => "book",
            'arco' => "bow", 'cesta' => "basket", 'navidad' => "christmast", 'carne' => "meat", 'pelicula' => "movie" );
            foreach($diccionario as $clave => $valor){
                $palabrasEspanol[]= $clave;
            }
        ?>
        <p>INTRODUZCA LA PALABRA A TRADUCIR</p> 
        <form action='ejercicio11.php' method='post'>
        <input type='name' name='palabra' autofocus>
        <input type='submit' value='Continuar'>
        </form>
        <?php
            if (isset($_POST['palabra'])){
                $palabra = $_POST['palabra'];
                if (in_array($palabra, $palabrasEspanol)){
                echo "Su palabra en inglés significa $diccionario[$palabra]";
                } else {
                echo "Su palabra no está en nuestra base de datos.";
                }    
            }
        ?>
    </body>
</html>
