<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <title>Punto 2-3</title>
  </head>
  <body>
    <?php
    $num1 = $_GET['ndecimal'];
    $resultado = decbin($num1);
    $resultado2 = dechex($num1);
    $resultado3 = decoct($num1);
     ?>

     <form action="index.html" method="get">
       <h1>Decimal a Binario y Hexadecimal</h1>

       <div class="primero">
         <label>Ingrese un numero Decimal:</label>
         <br>
         <input type="text" name="ndecimal" value="<?php echo $num1; ?>">
         <br>
         <br>
         <label>Resultado en Binario:</label>
         <br>
         <input type="text" name="nbinario" value="<?php echo $resultado; ?>">
         <br>
         <br>
         <label>Resultado en Hexadecimal:</label>
         <br>
         <input type="text" name="nhexa" value="<?php echo $resultado2; ?>">
         <br>
         <br>
         <label>Resultado en Octal:</label>
         <br>
         <input type="text" name="noctal" value="<?php echo $resultado3; ?>">
         <br>
         <br>
         <input type="submit" name="" value="Convertir" class="enviar">
         <input type="submit" name="" value="Borrar" class="borrar">
       </div>

       <hr>
       <hr>

       <?php
      $numbinario = $_GET['nbinario2'];
      $resultado2 = bindec($numbinario);

        ?>

       <h1>Binario a Decimal</h1>

       <div class="Segundo">
         <label>Ingrese un numero Binario: </label>
         <br>
         <input type="text" name="nbinario2" value="<?php echo $numbinario; ?>">
         <br>
         <br>
         <label>Resultado en Decimal:</label>
         <br>
         <input type="text" name="ndecimal2" value="<?php echo $resultado2; ?>">
         <br>
         <br>
         <input type="submit" name="" value="Convertir" class="enviar">
         <input type="submit" name="" value="Borrar" class="borrar">


       </div>

     </form>
  </body>
</html>
