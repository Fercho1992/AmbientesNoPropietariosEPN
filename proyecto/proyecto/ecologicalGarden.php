<!--Bloque HTML-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Huerto Ecologico</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--prettyPhoto-->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet">
    <!--main-->
    <link href="css/main.css" rel="stylesheet">

    <!-- startedTemplate CSS -->
    <link href="css/startedTemplate.css" rel="stylesheet">
    <!-- Rural_house_32 -->
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
    </header><!--Cierre Menu de navegacion-->

        <!--Carrusel de imagenes-->

        <section  class="container">
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!--Indicadores-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!--Imagenes-->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="image/huerto.jpg" alt="Huerto ecologico">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="image/huerto1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="image/huerto2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="image/semilla.jpg" alt="">
                        </div>
                    </div>

                    <!--Controles-->
                     <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <!--Parrafo indicativo-->
            <div class="col-md-6">
                <h1>Huerto ecologico</h1>
                <p>Hacienda "La Calera" posee un huerto ecologico, el cual es labrado por trabajadores quienes cada semana van cultivando hortalizas usando tecnicas innovadoras y amigables con el ambiente.
                 </p>
                <h3>Nuestros cultivos</h3>
                <ul>
                    <li>Rabano</li>
                    <li>Zanahoria</li>
                    <li>Cebolla</li>
                    <li>Espinaca</li>
                    <li>Lechuga</li>
                    <li>Peregil</li>
                    <li>Col</li>
                    <li>Brocoli</li>
                    <li>Coliflor</li>
                    <li>Pimientos</li>
                    <li>Tomate</li>
                    <li>Pepino</li>
                    <li>Arvejas</li>
                    <li>Aji</li>
                    </ul>
            </div><!--Cierre Parrafo indicativo-->

            </section>
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
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Maquinaria<i class="icon-angle-down"></i></a>
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
    </footer><!--Pie de pagina-->

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