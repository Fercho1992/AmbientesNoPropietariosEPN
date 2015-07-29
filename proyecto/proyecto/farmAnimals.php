<!--Bloque HTML-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Animales</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--main-->
    <link href="css/main.css" rel="stylesheet">

    <!-- startedTemplate CSS -->
    <link href="css/startedTemplate.css" rel="stylesheet">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
    <body > 
          <!--Menu de navegacion-->
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img   alt="La Calera"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Inicio</a></li>
                    <li><a href="whoWeAre.php">Quienes Somos</a></li>
                    <li><a href="farmAnimals.php">Ganaderia</a></li>
                    <li><a href="ecologicalGarden.php">Huerto ecologico</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maquinaria<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="farmEquipment.php">Agricola</a></li>
                            <li class="divider"></li>
                            <li><a href="livestockEquipment.php">Ganadera</a></li>
                        </ul>
                    </li>
                    <li><a href="contacts.php">Contactos</a></li>
                </ul>
            </div>
                        <br>
            <p>
        </div>
    </header><!--Menu de navegacion-->

    <!--Parrafo descriptivo general-->
    <section  class="container">
    <div class="center">
      <h2><p><img src="image/Cow_silhouette_32_1.png" alt="">La Calera</p>
      <p>Machachi - Mejia - Ecuador</p></h2>
    </div>
    <hr>

    <p align="justify">Desde el inicio de nuestras actividades agricolas y ganaderas, hemos contado con el mejor ganado vacuno del canton. 
    En el año de 1998 adquirimos reses de raza Holstein Americano y con el paso de los años con la capacitacion constante de 
    nuestro personal se a logrado mejorar la raza de nuestros reses. 
    </p>

    <p align="justify">Pasamos de tener reses de raza Holstein Americano a hoy en dia reses de raza Holstein Neozelandes, con el paso de los años
    se ha realizado un mejoramiento del ganado vacuno, adquiriendo reses con mejor produccion del leche y reduciendo el numero de abortos y terneros muertos antes del parto.</p>
    <p align="justify">
    Desde el concepcion de un ternero comienza una cadena de crianza, pasando por una serie de cuidados rigurosos, chequeo constantes con veterinarios
    certificados, aplicando medicamentos de las mejores marcas y laboratorios del pais. Con el paso del tiempo la ternera pasa a ser una vacona donde nuestros
    trabajadores son los encargados de velar por los cuidados, al momento de adquirir cierto peso, se procede a la inseminacion artificial, previo antes un chequeo por parte del
    veterinario, una vez cumplido el periodo de gestacion pasan por un proceso de adaptacion antes del parto, pasado el parto el ternero recibe calastro.
    Despues del parto se hace un seguimiento de la res por si exite alguna complicacion. Tiempo despues la vacona pasa a ser una vaca la cual entra a la cadena de produccion de leche.   
    </p>

    <hr>
    <!--Descripcion animales de granja-->
    <div class="row">
      <!--Descripcion terneras-->
      <div class="col-sm-4">
        <h4>Terneros</h4>
        <p align="justify">Un animal bovino joven se suele llamar ternero hasta que llega a los 6-8 meses.</p>
        <div class="panel-group" id="accordion1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                  Lactancia
                </a>
              </h4>
            </div>
            <div id="collapseOne1" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="image/ganaderia/lactancia.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                  Crianza de terneros
                </a>
              </h4>
            </div>
            <div id="collapseTwo1" class="panel-collapse collapse">
              <div class="panel-body">
              <img src="image/ganaderia/crianza.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                  Chequeos
                </a>
              </h4>
            </div>
            <div id="collapseThree1" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="image/ganaderia/chequeo.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div><!--Cierre Descripcion terneras-->

      <!--Descripcion vaconas-->
      <div class="col-sm-4">
        <h4>Vaconas</h4>
        <p align="justify">Bovino joven de mas de un año </p>
        <div class="panel-group" id="accordion2">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                  Pastoreo
                </a>
              </h4>
            </div>
            <div id="collapseOne2" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="image/ganaderia/pastoreo.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
                  Inseminacion artificial
                </a>
              </h4>
            </div>
            <div id="collapseTwo2" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="image/ganaderia/inseminacion.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                  Parto
                </a>
              </h4>
            </div>
            <div id="collapseThree2" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="image/ganaderia/parto.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div><!--Cierre Descripcion vaconas-->

      <!--Descripcion vacas-->
      <div class="col-sm-4">
        <h4>Vacas</h4>
        <p align="justify">
        Ganado vacuno de la mejor raza a nivel nacional Holstein Neolzelandez.</p>
        <div class="panel-group" id="accordion3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3">
                  Pastoreo
                </a>
              </h4>
            </div>
            <div id="collapseOne3" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="image/ganaderia/pastoreo1.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3">
                  Cadena de produccion de leche
                </a>
              </h4>
            </div>
            <div id="collapseTwo3" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="image/ganaderia/ordenio.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3">
                  Pastoreo
                </a>
              </h4>
            </div>
            <div id="collapseThree3" class="panel-collapse collapse">
              <div class="panel-body">
                <img src="image/ganaderia/pastoreo2.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div><!--Cierre Descripcion vacas-->
    </div> <!--Cierre Descripcion animales de granja-->
  </section><!--Cierre Descripcion general-->

<!--Pie de pagina-->
<footer id="footer" class="midnight-blue ">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    &copy; 2015 <a target="_blank">La Calera S.A.</a>. Todos los derechos reservados.
                </div>
                <div class="col-sm-8">
                    <ul class="pull-right">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="whoWeAre.php">Quienes Somos</a></li>
                        <li><a href="farmAnimals.php">Ganaderia</a></li>
                        <li><a href="ecologicalGarden.php">Huerto Ecologico</a></li>
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maquinaria<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="farmEquipment.php">Agricola</a></li>
                            <li class="divider"></li>
                            <li><a href="livestockEquipment.php">Ganadera</a></li>
                        </ul>
                    </li>
                        <li><a href="contacts.php">Contactos</a></li>
                        <li><a id="gototop" class="gototop" ><i class="icon-chevron-up"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--Cierre pie de pagina-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- prettyPhoto -->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- main -->
    <script src="js/main.js"></script>
  </body>
</html><!--Cierre Bloque HTML-->