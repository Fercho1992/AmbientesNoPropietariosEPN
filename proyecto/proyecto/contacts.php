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

    <link href="css/startedTemplate.css" rel="stylesheet">

    <link rel="shortcut icon" href="image/Rural_house_32.png">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
          <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="image/Farmer_32.png"><a class="navbar-brand" href="index.php">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="whoWeAre.php">Quienes Somos<span class="sr-only">(current)</span><img src="image/Big_barn_32.png"></a></li>
        <li><a href="animals.php">Animales<img src="image/Cow_silhouette_32_1.png"></a></li>
        <li><a href="ecologicalGarden.php">Huerto ecologico<img src="image/Plant_leaves_on_a_hand_32.png"></a></li>
        <li class="dropdown">
          <a href="farmEquipment.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="image/Tractor_32.png">Maquinaria Agricola<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="farmEquipment.php">Tractores</a></li>
            <li><a href="farmEquipment.php">Remolques</a></li>
            <li><a href="farmEquipment.php">Segadora</a></li>
            <li><a href="farmEquipment.php">Arado de discos</a></li>
            <li><a href="farmEquipment.php">Rodillo</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="farmEquipment.php">Ordeño Mecanico</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="contacts.php"><img src="image/Touch_screen_phone_32 (2).png">Contactos</a></li>
        <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="email" name="usuario" class="form-control" placeholder="xyz@ejemplo.com" required="">
          <input type="password" name="contrasena" class="form-control" placeholder="contraseña" required="">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!-- Page Content -->
    <div class="container">
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=0,0&amp;spn=0,0&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
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
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://es-la.facebook.com/"><img src="image/Facebook_logo_32.png"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/?lang=es"><img src="image/Twitter_Logo_Button_32.png"></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/"><img src="image/Instagram_Logo_32.png"></a>
                    </li>
                </ul>
            </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Envienos un mensaje</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre completo:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Telefono:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Correo electronico:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Comentarios o sugerencias:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>La Calera S.A.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src=".js/contact_me.js"></script>

</body>
</html>