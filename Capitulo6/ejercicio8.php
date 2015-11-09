<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (isset($_POST['borra'])){
    foreach ( $_COOKIE as $nombre => $valor ){
        setcookie( $nombre, $valor, time() -1);
    }
}
    
if (isset($_POST['ingles'])){
    $ingles = $_POST['ingles'];
    $espanol = $_POST['espanol'];
    setcookie($ingles, $espanol , time() + 60*60*60);
}

$diccionario = array (
            'uno' => "one", 'casa' => "house", 'perro' => "dog", 'gato' => "cat", 'mesa' => "table",
            'silla' => "chair", 'coche' => "car", 'puerta' => "door", 'pan' => "bread", 'rey' => "king",
            'rojo' => "red", 'azul' => "blue", 'caballo' => "horse", 'profesor' => "teacher", 'libro' => "book",
            'arco' => "bow", 'cesta' => "basket", 'navidad' => "christmast", 'carne' => "meat", 'pelicula' => "movie" );
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <div>
            <h2>Diccionario DAW2</h2>
            <p>Bienevenido a nuestro programa de diccionario</p>

            <p>Para evaluar tu vocabulario ingles-español <a href="prueba.php">pulse aquí:</a>
                

            <h3>Introduzca palabra</h3>
            <form action="ejercicio8.php" method="post">
              Español: <input type="text" name="espanol" autofocus=""><br>
              Inglés: <input type="text" name="ingles"><br>
              <input type="submit" name="accion" value="Introducir">
            </form>
        
        
            <h3>Palabras introducidas:</h3>
            <table>
                <tr><th>Ingles</td><td>Español</td> </tr>
            <?php
            foreach($_COOKIE as $nombre => $valor){
                if (($nombre!="color")&&($nombre!="PHPSESSID")){
                    echo "<tr><td> $nombre </td><td> $valor </td></tr>";
                }
            }
            ?>
            </table>
            <form action="ejercicio8.php" method="post">
              <input type="submit" name="borra" value="Borrar todas las palabras">
            </form>
            
             <h3>Palabras del diccionario:</h3>
            <table>
                <tr><th>Ingles</td><td>Español</td> </tr>
            <?php
            foreach($diccionario as $nombre => $valor){
                echo "<tr><td> $valor </td><td> $nombre </td></tr>";
            }
            ?>
            </table>
        </div>
    </body>
</html>
