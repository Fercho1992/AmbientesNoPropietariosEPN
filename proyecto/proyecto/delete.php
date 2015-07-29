<?php
session_start();
if (isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion | La Calera</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<body>

    <div id="wrapper">

        <!-- NavBar -->
        <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >La Calera</a>
            </div>
            <!-- Items -->
            <ul class="nav navbar-right top-nav ">                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="image/users53.png"> <?php echo $_SESSION['usuario']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admin.php"><img src="image/manager3.png"> Administracion</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><img src="image/gears3.png"> Acciones </a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="insert.php">Insertar</a>
                            </li>
                            <li>
                                <a href="update.php">Actualizar</a>
                            </li>

                             <li>
                                <a href="delete.php">Eliminar</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="salary.php"><img src="image/books71.png"> Rol de pago</a>
                    </li>
                </ul>
            </div>
        </nav>
        </div>

        <div id="page-wrapper">

            <div class="container-fluid">

                <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <span>   </span>
            </div>
            <!--Formulario para eliminar-->
            <div class="col-md-6">
              <div class="row">
                <form action= "delete.php" class="form-inline" method="post">
                <br>
                <div class="form-group">
                <label><h1>La Calera</h1></label>
                <br>
                <label><h1>Eliminar empleados</h1></label>
                <br>
                <br>
                
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
                <input type="text" name="fechaNacimiento" class="form-control" id="fechaNacimiento" value="'.$row['fechaNacimiento'].'">
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
                <select class="form-control" name="estadoCivil" id="estadoCivil" onchange="crear(this.value)">
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

            <div class="col-md-3"> </div>
          </div>
        </div>
      </div>
    </div> 
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
}
else
{
    echo '<script>alert("primero debes loguearte para ver esta pagina")</script>';
    echo '<script>location.href = "login.php";</script>';
}
?>
