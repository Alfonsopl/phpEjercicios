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
        <title>Ejercicio 10</title>
    </head>
    <body>
         <div>
 
            <h2> El Hoscopo</h2>
            Por favor, introduzca su dia de nacimiento para conocer su horóscopo:
            <form action="ejercicio10.php" method="post">
              <input type="number" name="dia" autofocus step="1" value="1" min="1" max="31">
              <select name="mes">
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">OCtubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
                </select>
              <input type="submit" value="Aceptar">
            </form>
            <?php 
            if (($dia!= -5) && ($mes!=-5)) {
                $dia = $_POST['dia'];
                $mes = $_POST['mes'];
                if ((($dia >= 21) && ($mes == 3)) || (($dia <= 20) && ($mes == 4))){
                   echo "<h2>Aries (21/3 - 20/4)</h2> <p>Personas fuertes, con energía, 
                        institivos y dinámicos... con coraje. a veces
                        egocentristas, tienden a acaparar el liderazgo,
                        signo vital asociado a grandes deportistas de competición.</p>"; 
                }
                if ((($dia >= 21) && ($mes == 4)) || (($dia <= 20) && ($mes == 5))){
                   echo "<h2>Tauro (21/4 - 20/5)</h2> <p>Personas resistentes, pacientes, 
                        que saben guardar la calma. Tienen como activo la inteligencia. 
                        Son personas muy realistas. </p>"; 
                }
                if ((($dia >= 21) && ($mes == 5)) || (($dia <= 20) && ($mes == 6))){
                   echo "<h2>Géminis (21/5 - 20/6)</h2> <p>Contradictorios y 
                       versátiles, cambian con facilidad. Pasan de ser serenos, 
                       y fascinantes, a pesimistas y amorfos. Fantasiosos, aman
                       la libertad e independencia.  </p>"; 
                }
                if ((($dia >= 21) && ($mes == 6)) || (($dia <= 20) && ($mes == 7))){
                   echo "<h2>Cancer (21/6 - 20/7)</h2> <p>Familares, tímidos, posesivos,
                     imaginativos y románticos. Dulces que viajan entre la 
                     melancolía y la alegría.   </p>"; 
                }
                
                if ((($dia >= 21) && ($mes == 7)) || (($dia <= 21) && ($mes == 8))){
                   echo "<h2>Leo (21/7 - 21/8)</h2> <p>Extrovertidos, autoritarios,
                    libres, fuertes, pasionales y generosos. Optimistas y a veces 
                    un poco imprudentes. </p>"; 
                }
                if ((($dia >= 22) && ($mes == 8)) || (($dia <= 22) && ($mes == 9))){
                   echo "<h2>Virgo (22/8 - 22/9)</h2> <p>Meticulosos en los detalles, 
                    eficientes, severos y racionales en su vida y trabajo. 
                    Buenos ahorradores.  </p>"; 
                }
                if ((($dia >= 23) && ($mes == 9)) || (($dia <= 22) && ($mes == 10))){
                   echo "<h2>Libra (23/9 - 22/10)</h2> <p>Diplomatico, encantador y 
                   sociable. Los libra son idealistas, pacíficos, optimistas y románticos. </p>"; 
                }
                if ((($dia >= 23) && ($mes == 10)) || (($dia <= 22) && ($mes == 11))){
                   echo "<h2>Escorpio (23/10 - 22/11)</h2> <p>Los más intuitivos, 
                    tienden a ser profundos y serios, autoritario, celoso, 
                    posesivo pero mutables y pasionales..  </p>"; 
                }
                if ((($dia >= 23) && ($mes == 11)) || (($dia <= 20) && ($mes == 12))){
                   echo "<h2>Sagitario  (23/11 - 20/12)</h2> <p>Los más intuitivos, 
                   Confiados, alegres, sinceros, fieles amigos, amantes de la naturaleza y el aire libre. </p>"; 
                }
                if ((($dia >= 21) && ($mes == 12)) || (($dia <= 19) && ($mes == 1))){
                   echo "<h2>Capricornio (21/12 - 19/1)</h2> <p>Son introvertidos impulsivos... Rasgos en ellos
                     son la timidez y la inseguridad; perfil ambicioso, frío, melancólico, pero son afectuosos. </p>"; 
                }
                if ((($dia >= 20) && ($mes == 1)) || (($dia <= 18) && ($mes == 2))){
                   echo "<h2>Acuario (20/1 - 18/2)</h2> <p>Sinceros, altruistas, 
                    simpáticos y activos, pero pasan por momentos de gran nerviosismo 
                    y tensión, vanidosos, muy creativos, agradables. </p>"; 
                }
                if ((($dia >= 19) && ($mes == 2 )) || (($dia <= 20) && ($mes == 3 ))){
                   echo "<h2>Piscis (19/2 - 20/3)</h2> <p>Sutiles, dulces, tolerantes, imprevisibles, 
                       románticos pero quisquillosos e incluso infieles. Creen en la amistad y el amor.
                        Ir a Piscis. . </p>"; 
                }   
                
                
            }
            
            $mes = -5;
            $dia = -5;
            ?>
        </div>
    </body>
</html>
