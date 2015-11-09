<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

    session_start(); // Inicio de sesión
    
    
///////////////////////////////////////////////////////////////////////////////
//// EN CASO DE QUE NO HAYA PRODUCTOS EN LAS COOKIES LE METO UNOS CUANTOS//////
    
    if(!isset($_COOKIE['producto'])) {
    $producto = [
            ["nombre" => "Guitarra 1", "imagen" => "imagen1.jpg", "precio" => 100,
                "descripcion" => "Lorem ipsum ad his scripta blandit partiendo, 
                eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
                ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
                Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
                Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
                eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
                Quo no falli viris intellegam, ut fugit veritus placerat per."],
            ["nombre" => "Guitarra 2", "imagen" => "imagen2.jpg","precio" => 200,
                "descripcion" => "Lorem ipsum ad his scripta blandit partiendo, 
                eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
                ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
                Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
                Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
                eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
                Quo no falli viris intellegam, ut fugit veritus placerat per."],
            ["nombre" => "Guitarra 3", "imagen" => "imagen3.jpg","precio" => 300,
                "descripcion" => "Lorem ipsum ad his scripta blandit partiendo, 
                eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
                ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
                Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
                Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
                eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
                Quo no falli viris intellegam, ut fugit veritus placerat per."],
            ["nombre" => "Guitarra 4", "imagen" => "imagen4.jpg","precio" => 400,
                "descripcion" => "Lorem ipsum ad his scripta blandit partiendo, 
                eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
                ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
                Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
                Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
                eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
                Quo no falli viris intellegam, ut fugit veritus placerat per."],
            ["nombre" => "Guitarra 5", "imagen" => "imagen5.jpg","precio" => 500,
                "descripcion" => "Lorem ipsum ad his scripta blandit partiendo, 
                eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
                ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
                Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
                Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
                eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
                Quo no falli viris intellegam, ut fugit veritus placerat per."]
        ];
    
    $coockie= serialize($producto);
    setcookie("producto", $coockie, time()+ 60*60*60);
    }
    if(isset($_COOKIE['producto'])) {
        $coockie= $_COOKIE['producto'];
        $producto = unserialize($coockie);
    }
    
    
    ////////////////
    if (!isset($_SESSION['producto1'])) {
        for ($i=0; $i<(count($producto)); $i++){
            $_SESSION['producto'.$i] = 0;
            $_SESSION['detalle'.$i] = false;
        }
    } else {
        for ($i=0; $i<(count($producto)); $i++){
            if (isset($_POST['producto'.$i])){
                 $_SESSION['producto'.$i]++;
            }
            if (isset($_POST['detalle'.$i])){
                if (!$_SESSION['detalle'.$i]) {
                    $_SESSION['detalle'.$i] = true;
                }
                else if ($_SESSION['detalle'.$i]) {
                    $_SESSION['detalle'.$i] = false;
                } 
            }
        }
        for ($i=0; $i<(count($producto)); $i++){
            if (isset($_POST['borra'.$i])){
                 $_SESSION['producto'.$i] = 0;
            }
        }
    }
    
        
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Ejercicio 9</title>
    </head>
    <body>
        <div id="contenido">
            <h2>Tienda online</h2>
            <h3><a href="admin.php">Administracion de la tienda</a></h3>
            <div id="left">
                <h3>Productos</h3>
                    <?php
                     for ($i=0; $i<(count($producto)); $i++) { ?>
                    <div>
                        <a name="a<?=$i ?>"></a>
                        <form action="ejercicio9.php#a<?=$i ?>" method="post">
                        <img src='imagenes/<?php echo$producto[$i]["imagen"];?>'><?php echo $producto[$i]["nombre"];?>
                        <br><?php echo $producto[$i]["precio"];?>€ <br><input type='submit' name='detalle<?= $i;?>' value='Detalle'>
                        <input type='submit' name='producto<?= $i;?>' value='Comprar'></div>
                        <?php if ($_SESSION['detalle'.$i]){ ?>
                        <div class="detalle"><?= $producto[$i]['descripcion']?></div>
                        <?php }?>
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
                    for ($i=0; $i<(count($producto)); $i++) {
                        if ($_SESSION['producto'.$i]>0) {?>
                            <div><b><?=$producto[$i]['nombre']?></b><br>cantidad: <?=$_SESSION['producto'.$i]?><br>Precio <?=$producto[$i]['precio']?>€<br>
                             Total: <?= ($producto[$i]["precio"] * $_SESSION['producto'.$i]) ?>€<br><input type='submit'
                             name='borra<?=$i ?>' value='eliminar'></div>";
                <?php    }
                    }
                    $total = 0;
                    for ($i= 0; $i<(count($producto));  $i++){
                        $total += ($producto[$i]['precio'] * $_SESSION['producto'.$i]);
                    }
                    echo "<b>Total comprado: ".$total."€</b>";                       
                ?>
                </form>
            </div>
            
        </div>
    </body>
</html>