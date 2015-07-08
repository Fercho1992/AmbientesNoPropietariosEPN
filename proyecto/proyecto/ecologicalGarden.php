<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Huerto Ecologico</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
    <body class="cuerpo"> 
          <div class="masthead">
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
      <a class="navbar-brand" href="index.php">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="whoWeAre.php">Quienes Somos<span class="sr-only">(current)</span><img src="image/Big_barn_32.png"></a></li>
        <li><a href="farmAnimals.php">Ganaderia<img src="image/Cow_silhouette_32_1.png"></a></li>
        <li><a href="ecologicalGarden.php">Huerto ecologico<img src="image/Plant_leaves_on_a_hand_32.png"></a></li>
        <li class="dropdown">
          <a href="farmEquipment.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="image/Tractor_32.png">Maquinaria <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="farmEquipment.php">Agricola</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="livestockEquipment.php">Ganadera</a></li>
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
</div>

        <!-- Portfolio Item Row -->
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
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

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Huerto ecologico</h3>
                <p>Hacienda "La Calera" posee un huerto ecologico, el cual es labrado por trabajores quienes cada semana van cultivando hortalizas usando tecnicas innovadoras y amigables con el ambiente.
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
            </div>


<div class="navbar navbar-default navbar-fixed-bottom">
            <!-- Contact Details Column -->
                <p class="navbar-text pull-left"><img src="image/socialNetwork/Close_envelope_32.png"> 
                    <abbr title="CorreoElectronico"></abbr>: <a href="mailto:fernandoalexander2014@gmail.com">laCalera@yahoo.com</a>
                </p>
                <p>
                <ul class="list-unstyled list-inline list-social-icons pull-right">
                    <li>
                        <a href="https://es-la.facebook.com/"><img src="image/socialNetwork/Facebook_Logo_Button_32.png"></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/?lang=es"><img src="image/socialNetwork/Twitter_Logo_Button_32.png"></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/"><img src="image/socialNetwork/Instagram_Logo_32.png"></a>
                    </li>
                </ul>
        </div>
<!-- jQuery -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>