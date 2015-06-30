<!--ESCUELA POLITECNICA NACIONAL-->
<!--ESCUELA DE FORMACION DE TECNOLOGOS-->
<!--AMBIENTES NO PROPIETARIOS-->
<!--FERNANDO MOYA-->
<!--30/06/2015-->
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
    <li data-target="#carousel-example" data-slide-to="2"></li>
    <li data-target="#carousel-example" data-slide-to="3"></li>
    <li data-target="#carousel-example" data-slide-to="4"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="image/logo.png" alt="Logo">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="image/Escudo_EPN.png" alt="EPN">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="image/shield.png" alt="ESCUDO">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item ">
      <img src="image/marvel_now_sdcc_2012_art.png" alt="MARVEL">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="image/marvel_puzzle.png" alt="MARVEL">
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
            <div class="col-md-6">
              <div class="row">
                <form action= "" class="form-inline" method="post">
                <br>
                <div class="form-group">
                <label><h1>MAC Solutions S.A.</h1></label>
                <br>
                <label><h1>Registro para nuevos empleados</h1></label>
                <br>
                <br>
                <label for="exampleInputName1">Nombre: </label>
                <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Juan Jose">
                <br>
                <br>
                <label for="exampleInputName2">Apellido: </label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Flores">
                <br>
                <br>
                <label >Fecha de Nacimiento: </label>
                <input type="text" name="fechaNacimiento" class="form-control" id="fechaNacimiento" placeholder="01/01/1900">
                <br>
                <br>
                <label >Direccion: </label>
                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Quito">
                <br>
                <br>
                <label >Telefono: </label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="099xxxx471">
                <br>
                <br>
                <label >Estado Civil: </label> 
                <select class="form-control" name="estado_civil" id="estado_civil" onchange="crear(this.value)">
                  <option value="Soltero">Soltero</option>
                  <option value="Casado">Casado</option>
                  <option value="Viudo">Viudo</option>
                  <option value="Divorciado">Divorciado</option>
                  <option value="Union Libre">Union Libre</option>
                </select>
                <br>
                <br>
                <label >Departamento: </label>
                <select class="form-control" name="departamento" id="departamento" onchange="crear(this.value)">
                  <option value="ESFOT">ESFOT</option>
                  <option value="FIS">FIS</option>
                  <option value="FICA">FICA</option>
                  <option value="FIC">FIC</option>
                  <option value="FIQA">FIQA</option>
                </select>                    
                <br>
                <br>
                <input type="submit" class="btn btn-primary" value="Ingresar" name="ingresar align="center">
                </form>
                <br>
                </form>

                
            <!--Bloque PHP-->
            <?php

            /*Seleccionar todos los datos de la tabla empleado*/

              $query = 'select * from  empleado';
              $result = $conn->query($query);
              if(!$result)die($conn->error);
              $num_rows = $result->num_rows;
              echo '<br>';
              echo '<br>';
              echo '<table class="table table-bordered">';
                echo '<tr class="active">';
                echo '<th>Id</th>';
                  echo '<th>Nombre</th>';
                  echo '<th>Apellido</th>';
                  echo '<th>Fecha de Nacimiento</th>';
                  echo '<th>Direccion</th>';
                  echo '<th>Telefono</th>';
                  echo '<th>Estado Civil</th>';
                  echo '<th>Departamento</th>';
                  echo '<th>Opciones</th>';
                  echo '</tr>';


                  for ($i=0; $i <$num_rows ; ++$i) { 
                    $result->data_seek($i);
                    $row = $result->fetch_array(MYSQLI_ASSOC);


                echo '<tr class="info">';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['nombre'].'</td>';
                echo '<td>'.$row['apellido'].'</td>';
                echo '<td>'.$row['fechaNacimiento'].'</td>';
                echo '<td>'.$row['direccion'].'</td>';
                echo '<td>'.$row['telefono'].'</td>';
                echo '<td>'.$row['estadoCivil'].'</td>';
                echo '<td>'.$row['departamento'].'</td>';
                echo '<td> 

                <!--Boton eliminar-->

                  <form action ="" method="post" >
                    <button type="button" class="btn btn-primary btn-xs btn-danger" data-toggle="modal" data-target="#myModal">
                  Eliminar
                </button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h1 class="modal-title" id="myModalLabel">Dar de baja empleado</h1>
                      </div>
                      <div class="modal-body">
                        Esta seguro de eliminar este registro.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" >Si</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" value="' . $row['id'] . '"  name="id">
                </form>

                <!--Boton Modificar-->

                  <form action ="" method="post" >
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal2">
                    Modificar
                  </button>

                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h1 class="modal-title" id="myModalLabel2">Formulario para actualizacion de datos</h1>
                        </div>
                        <div class="modal-body">

                <label for="exampleInputName2">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre"  value="'.$row['nombre'].'">
                <br>
                <br>

                <label for="exampleInputName2">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" value="'.$row['apellido'].'">
                <br>
                <br>

                <label>Fecha de nacimiento</label>
                <input type="text" name="fechaNacimiento" class="form-control" id="fechadenacimiento" value="'.$row['fechadenacimiento'].'">
                <br>
                <br>

                <label>Dirección</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="'.$row['direccion'].'">
                <br>
                <br>

                <label>Telefono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="'.$row['telefono'].'">
                <br>
                <br>

                <label>Estado Civil</label> 
                <select class="form-control" name="estadoCivil" id="estado_civil" onchange="crear(this.value)">
                    <option value="Soltero">Soltero</option>
                    <option value="Casado">Casado</option>
                    <option value="Viudo">Viudo</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Union Libre">Union Libre</option>
                  </select>
                  <br>
                  <br>

                <label >Departamento</label>
                <select class="form-control" name="departamento" id="departamento" onchange="crear(this.value)">
                  <option value="ESFOT">ESFOT</option>
                  <option value="FIS">FIS</option>
                  <option value="FIS">FICA</option>
                  <option value="FIC">FIC</option>
                  <option value="FIQA">FIQA</option>
                </select>  
                <br>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                  </div>
                </div>
              </div>
          <input type="hidden" value="' . $row['id'] . '"  name="id">
          </form>
          </td>';
                echo '</tr>';
              }
              echo '</table>';

              /*Cerrar la conexion con la base de datos*/
              $result->close();
              $conn->close();
            ?>
                </div>
              </form>
              </div>
            </div>
            <div class="col-md-3">  </div>
          </div>
        </div>
      </div>
    </div>
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

