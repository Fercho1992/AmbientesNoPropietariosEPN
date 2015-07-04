<!--ESCUELA POLITECNICA NACIONAL-->
<!--ESCUELA DE FORMACION DE TECNOLOGOS-->
<!--AMBIENTES NO PROPIETARIOS-->
<!--FERNANDO MOYA-->
<!--03/07/2015-->
<!--Uso del Bootstrap-->
<!--Bloque PHP-->
<?php error_reporting (0);//Desactivar errores Notice Undefined
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

?>

<!--Bloque HTML-->

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAC Solutions S.A.</title>
    <link rel="shortcut icon" href="image/EPN.ico"/>
    <link href="css/bootstrap.min.css" rel="stylesheet"><!--Estilo css de bootstrap-->
    <link href="style/style_v.css" rel="stylesheet" type="text/css"><!--Estilo personal-->
  </head>
  <body id="cuerpo">

  <!--Menu-->
    <div>
      <div class="row">
        <div class="col-md-12">   
          <div class="masthead">
            <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MAC Solution</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Empresa</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Casa</a></li>
            <li><a href="#">Tecnologia</a></li>
            <li><a href="#">Variedad</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Oficina</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Seguridad Social</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder=".....">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Soporte</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contactos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Tecnico</a></li>
            <li><a href="#">Social</a></li>
            <li><a href="#">Puerta a puerta</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Espcecial</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
            </div>
        </div>
      </div>

      <!--Carrucel de imagenes-->
      <div id="carousel-example" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/bootstrap.png" alt="Boostrap">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="image/jquery.png" alt="jQuery">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controles-->
  <a class="left carousel-control" href="#carousel-example" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Atras</span>
  </a>

  <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Adelante</span>
  </a>
</div>

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <span>   </span>
            </div>
            <!--Formulario de inscripcion-->
            <!--Bloque PHP-->
            <?php
                echo '
                  <form action ="" method="post id="formulario" >
                  
                  <button type="button" id= "guardar" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal2">
                    Modificar
                  </button>

                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h1 class="modal-title" id="myModalLabel2">Actualizacion</h1>
                        </div>
                        <div class="modal-body">

                <label for="exampleInputName1">Nombre: </label>
                <input type="text" name="nombre" class="form-control" id="nombre"  value="'.$row['nombre'].'">
                <br>
                <br>

                <label for="exampleInputName2">Correo Electronico: </label>
                <input type="text" name="correoElectronico" class="form-control" id="correo" value="'.$row['correoElectronico'].'">
                <br>
                <br>
                <label >Mensaje: </label>
                <br>
                <br>
                <textarea class="form-control" rows="8" id="mensaje" value="'.$row['mensaje'].'"></textarea>
                <br>
                <br>
                <label>
                Confirmar 
                <input type="checkbox" name="confirmar" id="confirmar" value="'.$row['confirmar'].'">
                </label>
                <br>
                <br>
                <br>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
              </div>
          <input type="hidden" value="' . $row['id'] . '"  name="id">
          </form>'
         ?>;
                </div>
              </form>
              </div>
            </div>
            <div class="col-md-3">  </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/jquery.js"></script><!--jquery para que trabaje junto a bootstrap-->
    <script src="js/bootstrap.min.js"></script><!--javascript para trabajar con bootstrap-->
  </body>
  <!--Fuentes de consulta

http://getbootstrap.com/javascript/
https://www.youtube.com/watch?v=-9NXJtE1bzI
https://www.youtube.com/watch?v=j9LgSZsU_bQ
https://www.youtube.com/watch?v=kpZVy5Z7iwU
https://www.youtube.com/watch?v=gIPuXfG_vsA
https://www.youtube.com/watch?v=7jxwf6gsk0Q
-->
</html>

