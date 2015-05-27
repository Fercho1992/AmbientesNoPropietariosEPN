<!--Creacion de una sesion en PHP-->
<?php
//include('p_index.php');
?>
 
<html>
   <head>
    <title>Login Ambientes  no propietarios</title>
   </head>
   <body>
   <?php
if( isset( $_SESSION['username'] ) && isset($_SESSION['password']) ){
  header ('LOCATION:inicio.php' );
  exit;
}

$usuarios = array(
    array('usuario'=>'juan','contraseña'=>'123456'),
    array('usuario'=>'maria','contraseña'=>'654321'),
    array('usuario'=>'anfres','contraseña'=>'0987654'));

$validar=true;
    $nombre= $_POST['username'];
    $clave = $_POST['password'];
    foreach($usuarios as $s){
     if($nombre == $s['usuario'] and $clave==$s['contraseña'])
     {
     $validar=true;
     break;

}elseif($_POST['username']=="" && $_POST['password']==""){
    $validar=false;
}
else{
     $validar=false;
}   
    }
    if($validar){
        $_SESSION['username']=$_POST['username'];
        header ('LOCATION:inicio.php' );
  exit;
    }else{
        echo 'Usuario y contraseña incorrecta';
    }
   ?>
     <h1>Examen: Iniciar sesion</h1>
     <form action="./index.php" method="POST">
       <p>
         <label>Usuario:</label>
         <input type="text" name="username" />
       </p>
       <p>
         <label>Contraseña:</label>
         <input type="password" name="password" />
       </p>
       <p>
        <input type="submit" value="INGRESAR" />
       </p>
     </form>
   </body>
</html>