<!--ESCUELA POLITECNICA NACIONAL-->
<!--ESCUELA DE FORMACION DE TECNOLOGOS-->
<!--AMBIENTES NO PROPIETARIOS-->
<!--FERNANDO MOYA-->
<!--16/06/2015-->

<!--Bloque PHP-->
<?php error_reporting (0);//Desactivar errores Notice Undefined
$conn = new Mysqli($host,$usuario,$cont,$bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

if($_POST){

	$id = $_POST['id'];
	/*Sentencia SQL para seleccion de datos de la tabla empleados*/
	$q_select = "select * from empleado where id ='$id'";
	$r= $conn->query($q_select);
	$var=$r->fetch_array(MYSQLI_ASSOC);
}

?>

<!--Bloque HTML-->
<html>
<head>
	<title>Modificar registros de la tabla empleados</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body id="cuerpo">

<form id="update" name="form1"  method="post" action="search.php" >
	<div id ="cabecera" align="center">
    <h1><p align="center">MAC Solution S.A.</p></h1>
    <h1><p align="center">Formulario para modificar los registros de los nuevos empleados </p></h1>
  </div>
  
  <p>
    <input type="hidden" value="<?php echo $var['id'];?>"  name="id">
  </p>
  
    <div align="center">
        <td ><table width="50" border="1">
          <tr>
            <td><div >Nombre:</div>
            </td>
            <td><div >
              <input type="text" name="nombre" value="<?php echo $var['nombre'];?>" id ="nombre">
            </div>
            </td>
          </tr>
          <tr>
            <td><div >Apellido: </div>
            </td>
            <td><div >
              <input type="text" name="apellido" value="<?php echo $var['apellido'];?>" id="apellido">
            </div>
            </td>
          </tr>
          <tr>
            <td><div >Fecha de Nacimiento:</div>
            </td>
            <td><div >
              <input type="text" name="fechaNacimiento" value="<?php echo $var['fechaNacimiento'];?>" id="fechaNacimiento">
            </div>
            </td>
          </tr>
          <tr>
            <td><div >Direcci&oacute;n: </div>
            </td>
            <td><div >
              <input type="text" name="direccion" value="<?php echo $var['direccion'];?>" id="direccion">
            </div>
            </td>
          </tr>
          <tr>
            <td><div >Tel&eacute;fono:</div>
            </td>
            <td><div >
              <input type="text" name="telefono" value="<?php echo $var['telefono'];?>" id="telefono">
            </div>
            </td>
          </tr>
          <tr>
            <td><div >Estado Civil:</div>
            </td>
            <td><div >
              <input type="text" name="estadoCivil" value="<?php echo $var['estadoCivil'];?>" id="estadoCivil">
            </div>
            </td>
          </tr>
          <tr>
            <td><div >Departamento:</div>
            </td>
            <td><div >
              <input type="text" name="departamento" value="<?php echo $var['departamento'];?>" id="departamento">
            </div>
            </td>
          </tr>
          <tr align="center">
            <td>
              <input type="submit" value="Actualizar registro" name="modificar"  >
            </td>
          </tr>
        </table>
    </div>
</form>

<p align="center">
          <a href="./index.php">Formulario de registro</a>
        </p>

<!--Bloque PHP-->
<?php  error_reporting (0);//Desactivar errores Notice Undefined
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $fechaNacimiento = $_POST['fechaNacimiento'];
  $direccion= $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $estadoCivil = $_POST['estadoCivil'];
  $departamento = $_POST['departamento'];
  /*Sentencia SQL para actualizar informacion en la tabla empleado*/
  $q_update = "update empleado set nombre='$nombre', apellido='$apellido',fechaNacimiento='$fechaNacimiento',
	direccion='$direccion', telefono='$telefono',estadoCivil='$estadoCivil', departamento='$departamento' where id='$id'";
	$res= $conn->query($q_update);
	if(!$res){
		echo '<div align="center">Revise los registros no se puede modificar</div>';
	}else{
		echo '<div align="center">Registros modificados exitosamente</div>';
	}
}
?>
<!--Fuentes de consulta
https://www.youtube.com/watch?v=Av7ieWUhuFY
https://www.youtube.com/watch?v=WSWuSc-0hS8
https://www.youtube.com/watch?v=X2Ih7PbAxV8
https://www.youtube.com/watch?v=RZvIarvIAcQ
https://www.youtube.com/watch?v=4YkUYcczW2Y
https://www.youtube.com/watch?v=jbP4ndpepOo-->
</body>
</html>