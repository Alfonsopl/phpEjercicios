<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start(); // Inicio de sesión
    if (!isset($_SESSION['producto1'])) {
        for ($i=0; $i<4; $i++){
            $_SESSION['producto'.$i] = 0;
        }
    } else {
        for ($i=0; $i<4; $i++){
            if (isset($_POST['producto'.$i])){
                 $_SESSION['producto'.$i]++;
            }
        }
        for ($i=0; $i<4; $i++){
            if (isset($_POST['borra'.$i])){
                 $_SESSION['producto'.$i] = 0;
            }
        }
    }
    
        $producto = [
            ["nombre" => "Guitarra 1", "imagen" => "imagen1.jpg", "precio" => 100],
            ["nombre" => "Guitarra 2", "imagen" => "imagen2.jpg","precio" => 200],
            ["nombre" => "Guitarra 3", "imagen" => "imagen3.jpg","precio" => 300],
            ["nombre" => "Guitarra 4", "imagen" => "imagen4.jpg","precio" => 400],
            ["nombre" => "Guitarra 5", "imagen" => "imagen5.jpg","precio" => 500]
        ]
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <div id="contenido">
            <h2>Tienda online</h2>
            <div id="left">
                <h3>Productos</h3>
                    <?php
                     for ($i=0; $i<4; $i++) { ?>
                    <div>
                        <a name="a<?=$i ?>"></a>
                        <form action="ejercicio5.php#a<?=$i ?>" method="post">
                        <img src='imagenes/<?php echo$producto[$i]["imagen"];?>'><?php echo $producto[$i]["nombre"];?>
                        <br><?php echo $producto[$i]["precio"];?>€ <br><input type='submit' name='producto<?= $i;?>' value='comprar'></div>
                        </form>
                    <?php
                     }
                    ?>
            </div>
            <div id="right">
                <h3>Carrito</h3>
                <form action="#" method="post">
                <?php
                    $total= 0;
                    for ($i=0; $i<4; $i++) {
                        if ($_SESSION['producto'.$i]>0) {?>
                            <div><b><?=$producto[$i]['nombre']?></b><br>cantidad: <?=$_SESSION['producto'.$i]?><br>Precio <?=$producto[$i]['precio']?>€<br>
                             Total: <?= ($producto[$i]["precio"] * $_SESSION['producto'.$i]) ?>€<br><input type='submit'
                             name='borra<?=$i ?>' value='eliminar'></div>";
                <?php    }
                    }
                    $total = 0;
                    for ($i= 0; $i<4;  $i++){
                        $total += ($producto[$i]['precio'] * $_SESSION['producto'.$i]);
                    }
                    echo "<b>Total comprado: ".$total."€</b>";                       
                ?>
                </form>
            </div>
            
        </div>
    </body>
</html>