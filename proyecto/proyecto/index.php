<!--Bloque HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>La Calera</title>
    <!--Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--prettyPhoto-->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet">
    <!--main-->
    <link href="css/main.css" rel="stylesheet">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">
    
</head><!--/head-->

<body> <!--body-->

<!--Menu de navegacion-->

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
    </header><!--/header-->

    <!--Carrusel de imagenes-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="" data-slide-to="0" class="active"></li>
                <li data-target="" data-slide-to="1"></li>
                <li data-target="" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(image/casaHuerta.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Hacienda "La Calera"</h2>
                                    <h3><p class="animation animated-item-2">"Una de las mejores Haciendas del Canton Mejia"</p></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(image/jardin.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                    <h2 class="boxed animation animated-item-1">Aplicando tecnicas amigables con el ambiente</h2>
                                    <p class="boxed animation animated-item-2">Capacitando a nuestro personal en el uso de tecnologia de ultima generacion</p>
                                    <br>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(image/vacas.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">El mejor ganado vacuno Neozelandes</h2>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div><!--/.item-->

            </div><!--Carrusel Inner-->

        </div><!--Carrusel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--Fin carrusel de imagenes-->

    <!--Redes Sociales-->
    <section id="services" class="emerald">
        <div class="container">
                    <h3>Redes Sociales</h3>
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-twitter icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Twitter</h3>
                        </div>
                    </div>
                </div><!--col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-facebook icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Facebook</h3>
                        </div>
                    </div>
                </div><!--col-md-4-->

                <div class="col-md-4 col-sm-6">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-google-plus icon-md"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Google Plus</h3>
                        </div>
                    </div>
                </div><!--col-md-4-->

            </div>
        </div>
    </section><!--Fin Redes sociales-->

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
                        <li><a id="gototop" class="gototop" href=""><i class="icon-chevron-up"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--Fin pie de pagina-->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- prettyPhoto -->
    <script src="js/jquery.prettyPhoto.js"></script>

</body>
</html><!--Fin Bloque HTML-->