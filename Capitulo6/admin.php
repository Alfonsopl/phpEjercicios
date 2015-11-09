<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
 
    
        session_start(); // Inicio de sesión
        
        $coockie= $_COOKIE['producto'];
        $producto = unserialize($coockie);
        
        
        if(isset($_POST['introducir'])){
            $productoNuevo = [
                "nombre" => $_POST['nombre'], "imagen" => $_POST['imagen'],"precio" => $_POST['precio'],
                "descripcion" => $_POST['descripcion']
            ];
            $producto[]= $productoNuevo;
            $coockie= serialize($producto);
            setcookie("producto", $coockie, time()+ 60*60*60);
            
        }
        
        if(isset($_POST['modificar'])){
            
        }
       
 
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Administracion de Tienda</title>
    </head>
    <body>
       
        
        <h2>Tienda online</h2>
        <?php echo $coockie;?><br><br>
        <?php var_dump($productoNuevo);?>
        
        
            <h3>Introducir producto</h3>
            <form action="#" method="post">
              Nombre <input type="text" name="nombre" autofocus=""><br>
              Ruta de la imagen <input type="text" name="imagen"><br>
              Precio <input type="number" name="precio" min="0"><br>
              <textarea name="descripcion" rows="10" cols="40">Escribe aquí la descripcion del producto</textarea><br>
              <input type="submit" name="introducir" value="Introducir">
            </form>
            
            <h3>Modificar producto</h3>
            <form action="#" method="post">
              Nombre <input type="text" name="nombre" autofocus=""><br>
              Ruta de la imagen <input type="text" name="imagen"><br>
              Precio <input type="number" name="precio" min="0"><br>
              <textarea name="descripcion" rows="10" cols="40">Escribe aquí la descripcion del producto</textarea><br>
              <input type="submit" name="modificar" value="Modificar">
            </form>
            <h3>Eliminar Producto</h3>
            <form action="#" method="post">
              Nombre <input type="text" name="nombre" autofocus=""><br>
              <input type="submit" name="eliminar" value="Eliminar">
            </form>
            
            <h3>Productos Introducidos</h3>
            <div id="contenido">
            <h2>Tienda online</h2>
            <h3><a href="admin.php">Administracion de la tienda</a></h3>
            <div id="left">
                <h3>Productos</h3>
                    <?php
                     for ($i=0; $i<(count($producto)); $i++) { ?>
                    <div>
                        <a name="a<?=$i ?>"></a>
                        <form action="admin.php#a<?=$i ?>" method="post">
                        <img src='imagenes/<?php echo$producto[$i]["imagen"];?>'><?php echo $producto[$i]["nombre"];?>
                        <br><?php echo $producto[$i]["precio"];?>€ <br>
                        </div>
                        <div class="detalle"><?= $producto[$i]['descripcion']?></div>
                        </form>
                    <?php
                     }
                    ?>
            </div>
            <div id="right">
    </body>
</html>
