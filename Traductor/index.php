<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/index.js"></script>
    <title>Traductor</title>
  </head>
  <body>

    <?php

     /*TRADUCCIONES DE ESPAÑOL A...*/
    $Array_Español_Ingles = array(
     'Red' => 'Rojo',
     'Green' => 'Verde',
     'Blue' => 'Azul',
     'Orange' => 'Naranja',
     'Black' => 'Negro',
     'White' => 'Blanco',
     'Yellow' => 'Amarillo',
     'Hello' => 'Hola',
     'Bye' => 'Adios',
     'How are you?' => 'Como estas?',
     'Dawn' => 'Amanecer',
     'Where are you?' => 'Donde estas?',
     'League Of Legends' => 'Liga de leyendas',
     'Travel' => 'Viaje',
     'Biscuit' => 'Bizcocho',
     'I am hungry' => 'Tengo hambre',
     'What is your name?' => 'Cual es tu nombre?'
     );

     $Array_Español_Frances = array(
      'Rougue' => 'Rojo',
      'Vert' => 'Verde',
      'Bleu' => 'Azul',
      'Orange' => 'Naranja',
      'Noir' => 'Negro',
      'Blanc' => 'Blanco',
      'Jaune' => 'Amarillo',
      'Salut' => 'Hola',
      'Adieu' => 'Adios',
      'Comment vas-tu?' => 'Como estas?',
      'Aube' => 'Amanecer',
      'Où es-tu?' => 'Donde estas?',
      'Ligue des legendes' => 'Liga de leyendas',
      'Voyage' => 'Viaje',
      'Gateau eponge' => 'Bizcocho',
      'j ai faim' => 'Tengo hambre',
      'Comment tu t appelles?' => 'Cual es tu nombre?'
      );

      $Array_Español_Aleman = array(
       'Rot' => 'Rojo',
       'Grün' => 'Verde',
       'Blau' => 'Azul',
       'Orange' => 'Naranja',
       'Schwarz' => 'Negro',
       'Weiß' => 'Blanco',
       'Gelb' => 'Amarillo',
       'Hallo' => 'Hola',
       'Auf Wiedersehen' => 'Adios',
       'Wie geht es dir?' => 'Como estas?',
       'Dawn' => 'Amanecer',
       'Wo bist du?' => 'Donde estas?',
       'League Of Legends' => 'Liga de leyendas',
       'Reise' => 'Viaje',
       'Biskuit' => 'Bizcocho',
       'Ich habe Hunger' => 'Tengo hambre',
       'Wie ist dein Name?' => 'Cual es tu nombre?'
       );



    /*TRADUCCIONES DE INGLES A....*/
     $Array_Ingles_Español = array(
       'Rojo' => 'Red',
       'Verde' => 'Green',
       'Azul' => 'Blue',
       'Naranja' => 'Orange',
       'Negro' => 'Black',
       'Blanco' => 'White',
       'Amarillo' => 'Yellow',
       'Hola' => 'Hello',
       'Bye' => 'Adios',
       'Como estas?' => 'How are you?',
       'Amanecer' => 'Dawn',
       'Donde estas?' => 'Where are you?',
       'Liga de leyendas' => 'League of legends',
       'Viaje' => 'Travel',
       'Bizcocho' => 'Biscuit',
       'Tengo hambre' => 'I am hungry',
       'Cual estu nombre?' => 'What is your name?'
     );

     $Array_Ingles_Frances = array(
       'Rougue' => 'Red',
       'Vert' => 'Green',
       'Bleu' => 'Blue',
       'Orange' => 'Orange',
       'Noir' => 'Black',
       'Blanc' => 'White',
       'Jaune' => 'Yellow',
       'Salut' => 'Hello',
       'Adieu' => 'Adios',
       'Comment vas-tu?' => 'How are you?',
       'Aube' => 'Dawn',
       'Où es-tu?' => 'Where are you?',
       'Ligue des legendes' => 'League of legends',
       'Voyage' => 'Travel',
       'Gateau eponge' => 'Biscuit',
       'j ai faim' => 'I am hungry',
       'Comment tu t appelles?' => 'What is your name?'
     );

     $Array_Ingles_Aleman = array(
       'Rot' => 'Red',
       'Grün' => 'Green',
       'Blau' => 'Blue',
       'Orange' => 'Orange',
       'Schwarz' => 'Black',
       'Weiß' => 'White',
       'Gelb' => 'Yellow',
       'Hallo' => 'Hello',
       'Auf Wiedersehen' => 'Adios',
       'Wie geht es dir?' => 'How are you?',
       'Dawn' => 'Dawn',
       'Wo bist du?' => 'Where are you?',
       'League Of Legends' => 'League of legends',
       'Reise' => 'Travel',
       'Biskuit' => 'Biscuit',
       'Ich habe Hunger' => 'I am hungry',
       'Wie ist dein Name?' => 'What is your name?'
     );


     /*TRADUCCION DE FRANCES A...*/
     $Array_Frances_Español = array(
      'Rojo' => 'Rougue',
      'Verde' => 'Vert',
      'Azul' => 'Bleu',
      'Naranja' => 'Orange',
      'Negro' => 'Noir',
      'Blanco' => 'Blanc',
      'Amarillo' => 'Jaune',
      'Hola' => 'Salut',
      'Adios' => 'Adieu' ,
      'Como estas?' => 'Comment vas-tu?',
      'Amanecer' => 'Aube',
      'Donde estas?' => 'Où es-tu?',
      'Liga de leyendas' => 'Ligue des legendes',
      'Viaje' => 'Voyage',
      'Bizcocho' => 'Gateau eponge',
      'Tengo hambre' => 'j ai faim',
      'Cual es tu nombre?' => 'Comment tu t appelles?'
      );

      $Array_Frances_Ingles = array(
       'Red' => 'Rougue',
       'Green' => 'Vert',
       'Blue' => 'Bleu',
       'Orange' => 'Orange',
       'Black' => 'Noir',
       'White' => 'Blanc',
       'Yellow' => 'Jaune',
       'Hello' => 'Salut',
       'Adios' => 'Adieu' ,
       'How are you?' => 'Comment vas-tu?',
       'Dawn' => 'Aube',
       'Where are you?' => 'Où es-tu?',
       'League of legends' => 'Ligue des legendes',
       'Travel' => 'Voyage',
       'Biscuit' => 'Gateau eponge',
       'I am hungry' => 'j ai faim',
       'What is your name?'=> 'Comment tu t appelles?'
       );

       $Array_Frances_Aleman = array(
        'Rot' => 'Rougue',
        'Grün' => 'Vert',
        'Blau' => 'Bleu',
        'Orange' => 'Orange',
        'Schwarz' => 'Noir',
        'Weiß' => 'Blanc',
        'Gelb' => 'Jaune',
        'Hallo' => 'Salut',
        'Auf Wiedersehen' => 'Adieu' ,
        'Wie geht es Ihnen?' => 'Comment vas-tu?',
        'Dämmerung' => 'Aube',
        'Wo bist du?' => 'Où es-tu?',
        'League of legends' => 'Ligue des legendes',
        'Reise' => 'Voyage',
        'Keks' => 'Gateau eponge',
        'Ich bin hungrig' => 'j ai faim',
        'Wie ist dein Name? '=> 'Comment tu t appelles?'
        );

        /*TRADUCCION ALEMAN A....*/

        $Array_Aleman_Ingles = array(
          'Red' => 'Rot',
          'Green' => 'Grün',
          'Blue' => 'Blau',
          'Orange' => 'Orange',
          'Black' => 'Schwarz',
          'White' => 'Weiß',
          'Yellow' => 'Gelb',
          'Hello' => 'Hallo',
          'Goodbye' => 'Auf Wiedersehen',
          'How are you?' => 'Wie geht es Ihnen?',
          'Dawn' => 'Dämmerung' ,
          'Where are you?' => 'Wo bist du?',
          'League of legends' => 'League of legends',
          'Travel' => 'Reise',
          'Biscuit' => 'Keks',
          'I am hungry' => 'Ich bin hungrig',
          'What is your name?' => 'Wie ist dein Name?'

        );

        $Array_Aleman_Español = array(
          'Rojo' => 'Rot',
          'Verde' => 'Grün',
          'Azul' => 'Blau',
          'Naranja' => 'Orange',
          'Negro' => 'Schwarz',
          'Blanco' => 'Weiß',
          'Amarillo' => 'Gelb',
          'Hola' => 'Hallo',
          'Adios' => 'Auf Wiedersehen',
          'Como estas?' => 'Wie geht es Ihnen?',
          'Amanecer' => 'Dämmerung' ,
          'Donde estas?' => 'Wo bist du?',
          'Liga de leyendas' => 'League of legends',
          'Viajar' => 'Reise',
          'Bizcocho' => 'Keks',
          'Tengo hambre' => 'Ich bin hungrig',
          'Cual es tu nombre?' => 'Wie ist dein Name?'

        );

        $Array_Aleman_Frances = array(
          'Rougue' => 'Rot',
          'Vert' => 'Grün',
          'Bleu' => 'Blau',
          'Orange' => 'Orange',
          'Noir' => 'Schwarz',
          'Blanc' => 'Weiß',
          'Jaune' => 'Gelb',
          'Salut' => 'Hallo',
          'Adieu' => 'Auf Wiedersehen',
          'Comment vas-tu?' => 'Wie geht es Ihnen?',
          'Aube' => 'Dämmerung' ,
          'Où es-tu?' => 'Wo bist du?',
          'Ligue des legendes' => 'League of legends',
          'Voyage' => 'Reise',
          'Gateau eponge' => 'Keks',
          'j ai faim' => 'Ich bin hungrig',
          'Comment tu t appelles?' => 'Wie ist dein Name?'

        );


    ?>




    <form action="index.php" method="GET">
      <h1>TRADUCTOR</h1>

      <div class="cajas_traduc">
        <select class="Select_1" name="Select_1">
          <option value="1">Español</option>
          <option value="2">Ingles</option>
          <option value="3">Frances</option>
          <option value="4">Aleman</option>
        </select>

        <label class="flechas">⇄</label>

        <select class="Select_2" name="Select_2">
          <option value="1">Ingles</option>
          <option value="2">Español</option>
          <option value="3">Frances</option>
          <option value="4">Aleman</option>
        </select>
      </div>

      <div class="Cajas_resp">
        <textarea name="Entrada_text" rows="8" cols="80"></textarea>
        <textarea name="Salida_text" rows="8" cols="80"><?php
         /*ESPAÑOL -INGLES*/
          if($_GET['Select_1'] == "1" && $_GET['Select_2']=="1")
          {
           while ($Traductor = current($Array_Español_Ingles))
           {
            if ($Traductor == $_GET['Entrada_text'])
            {
              echo key($Array_Español_Ingles);
            }
             next($Array_Español_Ingles);
            }
           }

           else
           {
             /*ESPAÑOL - FRANCES*/
             if($_GET['Select_1'] == "1" && $_GET['Select_2']=="3")
             {
              while ($Traductor = current($Array_Español_Frances))
              {
               if ($Traductor == $_GET['Entrada_text'])
               {
                 echo key($Array_Español_Frances);
               }
                next($Array_Español_Frances);
               }
              }
              else
              {
                /*ESPAÑOL - ALEMAN*/
                if($_GET['Select_1'] == "1" && $_GET['Select_2']=="4")
                {
                 while ($Traductor = current($Array_Español_Aleman))
                 {
                  if ($Traductor == $_GET['Entrada_text'])
                  {
                    echo key($Array_Español_Aleman);
                  }
                   next($Array_Español_Aleman);
                  }
                 }
                 else
                 {
                   /*INGLES - ESPAÑOL*/
                   if($_GET['Select_1'] == "2" && $_GET['Select_2']=="2")
                   {
                    while ($Traductor = current($Array_Ingles_Español))
                    {
                     if ($Traductor == $_GET['Entrada_text'])
                     {
                       echo key($Array_Ingles_Español);
                     }
                      next($Array_Ingles_Español);
                     }
                    }
                    else
                    {
                      /*INGLES - FRANCES*/
                      if($_GET['Select_1'] == "2" && $_GET['Select_2']=="3")
                      {
                       while ($Traductor = current($Array_Ingles_Frances))
                       {
                        if ($Traductor == $_GET['Entrada_text'])
                        {
                          echo key($Array_Ingles_Frances);
                        }
                         next($Array_Ingles_Frances);
                        }
                       }
                       else
                       {
                         /*INGLES - ALEMAN*/
                         if($_GET['Select_1'] == "2" && $_GET['Select_2']=="4")
                         {
                          while ($Traductor = current($Array_Ingles_Aleman))
                          {
                           if ($Traductor == $_GET['Entrada_text'])
                           {
                             echo key($Array_Ingles_Aleman);
                           }
                            next($Array_Ingles_Aleman);
                           }
                         }
                         else
                         {
                           /*FRANCES - ESPAÑOL*/
                           if($_GET['Select_1'] == "3" && $_GET['Select_2']=="2")
                           {
                            while ($Traductor = current($Array_Frances_Español))
                            {
                             if ($Traductor == $_GET['Entrada_text'])
                             {
                               echo key($Array_Frances_Español);
                             }
                              next($Array_Frances_Español);
                             }
                           }
                           else
                           {
                             /*FRANCES - INGLES*/
                             if($_GET['Select_1'] == "3" && $_GET['Select_2']=="1")
                             {
                              while ($Traductor = current($Array_Frances_Ingles))
                              {
                               if ($Traductor == $_GET['Entrada_text'])
                               {
                                 echo key($Array_Frances_Ingles);
                               }
                                next($Array_Frances_Ingles);
                               }
                             }
                             else
                              {
                                /*FRANCES - ALEMAN*/
                                if($_GET['Select_1'] == "3" && $_GET['Select_2']=="4")
                                {
                                 while ($Traductor = current($Array_Frances_Aleman))
                                 {
                                  if ($Traductor == $_GET['Entrada_text'])
                                  {
                                    echo key($Array_Frances_Aleman);
                                  }
                                   next($Array_Frances_Aleman);
                                  }
                                }
                                /*ALEMAN - INGLES*/
                                if($_GET['Select_1'] == "4" && $_GET['Select_2']=="1")
                                {
                                 while ($Traductor = current($Array_Aleman_Ingles))
                                 {
                                  if ($Traductor == $_GET['Entrada_text'])
                                  {
                                    echo key($Array_Aleman_Ingles);
                                  }
                                   next($Array_Aleman_Ingles);
                                  }
                                }
                                if($_GET['Select_1'] == "4" && $_GET['Select_2']=="2")
                                {
                                 while ($Traductor = current($Array_Aleman_Español))
                                 {
                                  if ($Traductor == $_GET['Entrada_text'])
                                  {
                                    echo key($Array_Aleman_Español);
                                  }
                                   next($Array_Aleman_Español);
                                  }
                                }
                                if($_GET['Select_1'] == "4" && $_GET['Select_2']=="3")
                                {
                                 while ($Traductor = current($Array_Aleman_Frances))
                                 {
                                  if ($Traductor == $_GET['Entrada_text'])
                                  {
                                    echo key($Array_Aleman_Frances);
                                  }
                                   next($Array_Aleman_Frances);
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                  }
                }
              }

          ?>
        </textarea>
      </div>

      <div class="botones">
        <input type="submit" name="btn_traducir" value="TRADUCIR" class="btn_traducir">
        <input type="submit" name="btn_borrar" value="BORRAR" class="btn_borrar">
      </div>


    </form>
  </body>
</html>
