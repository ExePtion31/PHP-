<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Turret+Road&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet">
    <title>Diccionario</title>
  </head>
  <body>
    <form class="" action="index.php" method="get">

        <div class="titulo">
          <h1>DICCIONARIO</h1>
        </div>

        <div class="Div_Doble">
          <div class="Div_Buscador">
            <label class="texto_1">Buscar una palabra</label><br>
            <input type="text" name="entrada_texto" value="" class="entrada_texto"><br>
            <input type="submit" name="" value="BUSCAR" class="Botoncito">
          </div>

          <?php
          error_reporting(0);
          $entrada_texto = $_GET['entrada_texto']
           ?>

          <div class="Div_respuesta">
           <div class="div_texto">
            <label class="Label_respuesta">
              <?php
              switch ($entrada_texto)
              {
                case "Advertising":
                     echo "Publicidad realizada por una marca.";
                     $imagen = "img/1.jpg";
                break;

                case 'Aplicacion':
                     echo "Software descargable para dispositivos y <br> ordenadores, que realiza una función útil y <br> complementaria para el usuario.";
                     $imagen = "img/2.jpg";
                break;

                case 'Backup':
                  echo "Copia de seguridad. Esta se realiza para prevenir <br> una posible pérdida de información.";
                  $imagen = "img/3.jpg";
                  break;

                case 'Business to Business':
                  echo "Toda relación empresarial que se da entre <br> dos organizaciones.";
                  $imagen = "img/4.png";
                  break;

                case 'Business to Client':
                  echo "Relación comercial entre una organización <br> y sus clientes.";
                  $imagen = "img/5.jpg";
                  break;

                case 'Banner':
                  echo "Gráfico flotante que se inserta en páginas web, utilizado <br> para realizar publicidad de un producto o servicio.";
                  $imagen = "img/6.jpg";
                  break;

                case 'Branding':
                  echo "Estrategias implementadas para aumentar <br> la visualización de una marca.";
                  $imagen = "img/7.jpg";
                  break;

                case 'Byte':
                  echo "Es la unidad de información utilizada por <br> los computadores.";
                  $imagen = "img/8.jpg";
                  break;

                case 'Cache':
                  echo "Sistema utilizado para la copia de archivos con el <br> fin de que los usuarios de una página web aprecien <br> los datos más rápidamente.";
                  $imagen = "img/9.png";
                  break;

                case 'CSS':
                  echo "Sirve para añadir códigos de edición que <br> configuran una web.";
                  $imagen = "img/10.jpg";
                  break;

                case 'Cluster':
                  echo "Es la unidad de almacenamiento en el disco rígido.";
                  $imagen = "img/11.png";
                  break;

                case 'Comercioelectronico':
                  echo "Todas aquellas acciones relacionadas con la compra y <br> venta de un producto o servicio a través de internet.";
                  $imagen = "img/12.jpg";
                  break;

                case 'Community Manager':
                  echo "Aquella persona que gestiona y dinamiza la <br> comunidad online que gira en torno a una marca.";
                  $imagen = "img/13.png";
                  break;

                case 'Cookies':
                  echo "Fragmento de información que se registra en tu <br> computador luego de visitar un sitio web.";
                  $imagen = "img/14.jpg";
                  break;

                case 'CPC':
                  echo "(Costo Por Click)Es una forma de comercializar <br> y financiar la publicidad en redes sociales.";
                  $imagen = "img/15.png";
                  break;

                case 'Dashboard':
                  echo "Se conoce como escritorio y es el área de <br> administración de un blog, donde se gestionan <br> todas las opciones.";
                  $imagen = "img/16.jpg";
                  break;

                case 'Bit':
                  echo "Es la unidad más pequeña de almacenamiento en un <br> sistema binario dentro de un computador.";
                  $imagen = "img/17.jpeg";
                  break;

                case 'Dominio':
                  echo "Es el nombre con el que registra una marca en Internet para tener su propio “nombre”.com, por ejemplo: nextu.com.";
                  $imagen = "img/18.jpg";
                  break;

                case 'Dummies':
                  echo "Una persona novata o principiante.";
                  $imagen = "img/19.jpg";
                  break;

                case 'Email Marketing':
                  echo "Estrategias que buscan establecer contacto con los clientes de una marca,  divulgar la promoción e información de los productos y servicios a través de un correo electrónico.";
                  $imagen = "img/20.png";
                  break;

                case 'Engagement':
                  echo "Es un indicador que mide la interacción de los usuarios de redes sociales con la marca o empresa.";
                  $imagen = "img/21.png";
                  break;

                case 'Fibra optica':
                  echo "Es un medio de transmisión por medio del cual se envían pulsos de luz que representan los datos a transmitir.";
                  $imagen = "img/22.jpg";
                  break;

                case 'Followers':
                  echo "Seguidores de un usuario o marca en redes sociales";
                  $imagen = "img/23.png";
                  break;

                case 'FAQ':
                  echo "Son respuestas a las preguntas más frecuentes acerca del producto o servicio de la página web.";
                  $imagen = "img/24.jpg";
                  break;

                case 'Gigabyte':
                  echo "Es la unidad de medida de una memoria. 1 gigabyte = 1024 megabytes = 1.824 bytes";
                  $imagen = "img/25.png";
                  break;

                case 'Hardware':
                  echo "Componentes físicos de un computador y sus periféricos.";
                  $imagen = "img/26.jpg";
                  break;

                case 'Hashtag':
                  echo "Es una etiqueta confirmada por una o más palabras precedidas por el símbolo numeral (#). Estas transmiten una idea, nombre o concepto que normalmente va asociado a un mensaje o texto.";
                  $imagen = "img/27.png";
                  break;

                case 'Hosting':
                  echo "Es un servicio que permite alojar y almacenar los elementos que conforman una página web, realizar transferencias de archivos vía FTP y crear cuentas de correo a partir de un dominio propio.";
                  $imagen = "img/28.png";
                  break;

                case 'HTML':
                  echo "HTML es un lenguaje de marcado que se utiliza para el desarrollo de páginas de Internet. Se trata de la siglas que corresponden a HyperText Markup Language, es decir, Lenguaje de Marcas de Hipertexto”.";
                  $imagen = "img/29.jpg";
                  break;

                case 'HTTP':
                  echo "El Protocolo de transferencia de hipertexto (en inglés: Hypertext Transfer Protocol o HTTP) es el protocolo de comunicación que permite las transferencias de información en la World Wide Web.";
                  $imagen = "img/30.jpg";
                  break;

                case 'KPI':
                  echo "Un KPI (key performance indicator), conocido también como indicador clave o medidor de desempeño o indicador clave de rendimiento, es una medida del nivel del rendimiento de un proceso.";
                  $imagen = "img/31.jpg";
                  break;

                case 'Landing Page':
                  echo "Son páginas estáticas o páginas de inicio con información y contenidos generales dónde van los usuarios al visitar una página web.";
                  $imagen = "img/32.jpg";
                  break;

                case 'Lenguaje de programacion':
                  echo "Es un sistema de escritura utilizado para la descripción de algoritmos o programas informáticos.";
                  $imagen = "img/33.jpg";
                  break;

                case 'RAM':
                  echo "Es el lugar donde el computador almacena datos que le permiten al procesador acceder rápidamente al operativo, aplicaciones y datos en uso.";
                  $imagen = "img/34.jpg";
                  break;

                case 'Metadatos':
                  echo "Son datos altamente estructurados que describen información, contenido, calidad, condición y más características de los datos.";
                  $imagen = "img/35.jpeg";
                  break;

                case 'Periferico':
                  echo "Son todos aquellos dispositivos que se pueden conectar a un computador, por ejemplo, impresora y mouse.";
                  $imagen = "img/36.jpeg";
                  break;

                case 'Plugin':
                  echo "Es una aplicación que agregan nuevas herramientas a la configuración de un blog o página web.";
                  $imagen = "img/37.png";
                  break;

                case 'IP':
                  echo "La dirección IP es un número que identifica, de manera lógica y jerárquica, a una Interfaz en red de un dispositivo (computadora, tableta, portátil, teléfono inteligente) que utilice el protocolo o (Internet Protocol), que corresponde al nivel de red del modelo TCP/IP.";
                  $imagen = "img/38.jpg";
                  break;

                case 'Responsive':
                  echo "Es una característica de las páginas web, la cual consiste en que estas tengan la capacidad de adaptarse a cualquier tipo de dispositivos móviles sin perder la calidad del contenido.";
                  $imagen = "img/39.png";
                  break;

                case 'ROI':
                  echo "Es un indicador que se encarga de medir el beneficio de una estrategia, en comparación con el gasto de la inversión.";
                  $imagen = "img/40.jpg";
                  break;

                case 'SEM':
                  echo "SEM(Search Engine Marketing)es la promoción de un producto o servicio a través de anuncios que tienen un costo.";
                  $imagen = "img/41.jpg";
                  break;

                case 'SEO':
                  echo "SEO(Search Engine Optimization)son acciones que tienen como objetivo optimizar la presencia de una marca en redes sociales.";
                  $imagen = "img/42.jpg";
                  break;

                case 'Sistema operativo':
                  echo "Conjunto de órdenes y programas que controlan los procesos básicos de una computadora y permiten el funcionamiento de otros programas.";
                  $imagen = "img/43.jpg";
                  break;

                case 'Software':
                  echo "Conjunto de programas y rutinas que permiten a la computadora realizar determinadas tareas.";
                  $imagen = "img/44.jpg";
                  break;

                case 'Spam':
                  echo "Hace referencia a los contenidos basura, ya sean comentarios o correos, los cuales principalmente están asociados con contenido comercial.";
                  $imagen = "img/45.jpg";
                  break;

                case 'Trafico web':
                  echo "El tráfico web es la cantidad de datos enviados y recibidos por los visitantes de un sitio web. Esta es una gran proporción del tráfico de internet. El tráfico web es determinado por el número de visitantes y de páginas que visitan";
                  $imagen = "img/46.png";
                  break;

                case 'Troll':
                  echo "Usuario que se caracteriza por aportar críticas destructivas y comentarios negativos.";
                  $imagen = "img/47.jpg";
                  break;

                case 'URL':
                  echo "Es la dirección específica que se le asigna a los recursos disponibles en la red con el fin de que estos puedan ser localizados.";
                  $imagen = "img/48.jpg";
                  break;

                case 'Webinar':
                  echo "Conferencias que se realizan vía online.";
                  $imagen = "img/49.jpg";
                  break;

                case 'Widget':
                  echo "Aplicación que permite aportar diversas funcionalidades a un sitio web.";
                  $imagen = "img/50.jpg";
                  break;

                default:
                  echo "No se ha digitado ninguna palabra o, la palabra no se encuentra disponible...";
                  $imagen = "img/error.jpg";
                  break;
              }

              ?>
            </label>


           </div>
            <img src="<?php echo $imagen ?>" alt="" class="foto_diccio">
          </div>
        </div>

    </form>
  </body>
</html>
