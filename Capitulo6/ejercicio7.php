
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

if (!isset($_COOKIE['color]'])) {
    $color = "#f0f0f0";
}

 if (isset($_POST["color"])) {
    $color = $_POST["color"];
    setcookie("color", $color, time() + 3*24*3600);
  } else if (isset($_COOKIE["color"])) {
    $color = $_COOKIE["color"];
  }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet"	 type="text/css" href="estilo.css"/>
        <title>Ejercicio 7</title>
        <style>
            body {
            background-color:<?=$color ?>;
            }
        </style>
    </head>
    <body>
        <?php echo "VARIABLE COLOR : $color"?>
        <form action="#" method="post">
            <input type="color" name="color"><input type='submit' value='Enviar'>
        </form>
        <p>Lorem ipsum ad his scripta blandit partiendo, 
        eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
        ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
        Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
        Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
        eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
        Quo no falli viris intellegam, ut fugit veritus placerat per</p>
        <p>Lorem ipsum ad his scripta blandit partiendo, 
        eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
        ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
        Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
        Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
        eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
        Quo no falli viris intellegam, ut fugit veritus placerat per</p>
        <p>Lorem ipsum ad his scripta blandit partiendo, 
        eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
        ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
        Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
        Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
        eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
        Quo no falli viris intellegam, ut fugit veritus placerat per</p>
        <p>Lorem ipsum ad his scripta blandit partiendo, 
        eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
        ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
        Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
        Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
        eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
        Quo no falli viris intellegam, ut fugit veritus placerat per</p>
        <p>Lorem ipsum ad his scripta blandit partiendo, 
        eum fastidii accumsan euripidis in, eum liber hendrerit an. Qui 
        ut wisi vocibus suscipiantur, quo dicit ridens inciderint id. 
        Quo mundi lobortis reformidans eu, legimus senserit definiebas an eos. 
        Eu sit tincidunt incorrupte definitionem, vis mutat affert percipit cu, 
        eirmod consectetuer signiferumque eu per. In usu latine equidem dolores. 
        Quo no falli viris intellegam, ut fugit veritus placerat per</p>
    </body>
</html>
