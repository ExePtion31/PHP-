<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $Consolas = array('Sega', 'Nintendo', 'Xbox', 'PS', '2600', 'Arcade');
    $Juego = array('Titulo' => 'Mario',
                   'Fechalanzamiento' => 1983,
                    'Empresa' => 'nintendo');

    echo "<h2>Tablas indexadas</h2><pre>";
    print_r($Consolas);
    echo "</pre>";

    ////////

    echo "<h2>Tablas asociativa</h2><pre>";
    print_r($Juego);
    echo "</pre>";

    ///////

    echo "<h2>Extraer elementos de una tabla</h2><pre>";
    $ConsolasEx =  array_slice($Consolas, 4);
    print_r($ConsolasEx);
    echo "</pre>";

    /////////

    echo "<h2>Contar tablas</h2><pre>";
    echo count($Consolas)."<br>";
    echo count($Juego)."<br>";
    echo count($ConsolasEx);
    echo "</pre>";

    ///////

    echo "<h2>Ordenar tablas indexadas(Asc)</h2><pre>";
    sort($Consolas);
    print_r($Consolas);
    echo "</pre>";

    ////////

    echo "<h2>Ordenar tablas indexadas(Desc)</h2><pre>";
    rsort($Consolas);
    print_r($Consolas);
    echo "</pre>";

    //////////////

    echo "<h2>Ordenar tablas asociativa(Asc)</h2><pre>";
    asort($Juego);
    print_r($Juego);
    echo "</pre>";

    ////////

    echo "<h2>Ordenar tablas asociativa(Desc)</h2><pre>";
    arsort($Juego);
    print_r($Juego);
    echo "</pre>";

    /////////

    echo "<h2>Convertir una tabla en una lista</h2><pre>";
    list($consola1, $consola2, $consola3, $consola4, $consola5, $consola6) = $Consolas;
    echo $consola1."<br>";
    echo $consola2."<br>";
    echo $consola3."<br>";
    echo $consola4."<br>";
    echo $consola5."<br>";
    echo "</pre>";




     ?>
  </body>
</html>
