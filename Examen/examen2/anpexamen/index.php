<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <fieldset class="registration-form">
      <form class="form-signin">
        <h2 class="form-signin-heading">MAC Solutions S.A.</h2>
        <div class="form-group">
        <label for="inputEmail" class="sr-only">Correo electronico</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Correo electronico" required autofocus>
        </div>

        <div class="form-group">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
        </div>
        <!--Modal-->
          <!-- Button trigger modal -->
          <div class="container">
<a href="" data-toggle="modal" data-target="#myModal">Si eres nuevo registrate</a>
<br>
        <br>
        <div class="container">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
        </div>
        </form>
        </fieldset>
        </div>

        <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro nuevos usuarios</h4>
      </div>
      <div id="verificar"class="modal-body">
        <label for="exampleInputName2">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required>
                <br>
                <br>

                <label for="exampleInputName2">Usuario</label>
                <input type="text" name="correo" class="form-control" id="usuario" required >
                <br>
                <br>

                <label for="exampleInputName2">Contraseña</label>
                <input type="password" id="inputPassword" name="correo" class="form-control" required autofocus >
                <br>
                <br>

                <label for="exampleInputName2">Verificar contraseña</label>
                <input type="password" id="inputPassword" name="correo" class="form-control" required autofocus>
                <br>
                <br>
                  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button class="btn btn-lg btn-primary " type="submit">Crear usuario</button>
      </div>
    </div>
  </div>
</div>
          <!--Cierre modal-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
                <script type="text/javascript" src="js/main.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    
  </body>
</html>
