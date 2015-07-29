<!--Bloque HTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contactos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--main-->
    <link href="css/main.css" rel="stylesheet">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
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
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Contactos<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="admin/login.php">Login</a></li>
                            <li class="divider"></li>
                            <li><a href="admin/registration.php">Registro</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <br>
            <p>
        </div>
    </header><!--Fin menu de navegacion-->

        

        <!--Detalles de contacto-->
        <section id="contact-page" class="container">
        <div class="row">
        <div class="col-md-3">
                <h3>Detalles del contacto</h3>
                <p>
                    Barrio "El Obelisco" - Sector "La Calera"<br>Canton Mejia<br>
                </p>
                <p><img src="image/Phone_receiver_32.png"> 
                    <abbr title="Telefono"></abbr>: (02) 2389-812</p>
                <p><img src="image/Close_envelope_32.png"> 
                    <abbr title="CorreoElectronico"></abbr>: <a href="mailto:fernandoalexander2014@gmail.com">laCalera@yahoo.com</a>
                </p>
                <p><img src="image/Old_Round_Clock_32.png"> 
                    <abbr title="Hours"></abbr>: Lunes - Viernes: 9:00 AM a 5:00 PM</p>
            </div>
            <div class="col-sm-8">
                <h4>Contactanos</h4>
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" required="required" placeholder="Correo electronico">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="...."></textarea>
                        </div>
                        <div class="col-sm-3">
                <h4>Nuestra direccion</h4>
                <!--Google maps-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1878.0241321584049!2d-78.55062105841995!3d-0.4567435082559411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2sec!4v1437374045963" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div><!--col-sm-4-->
                    </div>
                </form>
            </div><!--col-sm-8-->
    </section><!--Cierre Detalles de contacto-->

    <!--Pie de pagina-->
    <footer id="footer" class="midnight-blue navbar navbar-default navbar-fixed-bottom">
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
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--Cierre Pie de pagina-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- prettyPhoto -->
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- main -->
    <script src="js/main.js"></script>
    <!-- contacts -->
    <script src="js/contact_me.js"></script>
</body>
</html><!--Cierre Bloque HTML-->