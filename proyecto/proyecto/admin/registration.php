<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registro | La Calera</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contactos<i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="login.php">Login</a></li>
                            <li class="divider"></li>
                            <li><a href="registration.php">Registro</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </header><!--/header-->

    <section id="title" class="emerald">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Registro</h1>
                    <p>Registro para nuevos empleados</p>
                </div>
                <div class="col-sm-6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.php">Inicio</a></li>
                        <li class="active">Registro</li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!--/#title-->     

    <section id="registration" class="container">
        <form class="center" role="form">
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="email" name="email" placeholder="E-mail" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmar Contraseña" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-md btn-block">Registro</button>
                </div>
            </fieldset>
        </form>
    </section><!--/#registration-->


    <footer id="footer" class="midnight-blue">
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
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>