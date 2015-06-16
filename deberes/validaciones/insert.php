<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insertar datos en la tabla empleado</title>
</head>

<body>

<?php error_reporting (0);//Desactivar errores Notice Undefined
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $fechaNacimiento = $_POST['fechaNacimiento'];
  $direccion= $_POST['direccion'];
  $telefono = $_POST['telefono'];
  $estadoCivil = $_POST['estadoCivil'];
  $departamento = $_POST['departamento'];

	if($nombre != '' && $apellido != '' && $fechaNacimiento != ''&& $direccion != ''&& $telefono != ''&& $estadoCivil != ''&& $departamento != ''){
		/*Sentencia SQL para insertar informacion en la tabla empleado*/
    $q_insert = "insert into empleado(nombre,apellido,fechaNacimiento,direccion,telefono,estadoCivil,departamento)
                  values ('$nombre', '$apellido', '$fechaNacimiento', '$direccion','$telefono','$estadoCivil','$departamento')";
    $res = $conn->query($q_insert);
	
    if(!$res)
	{
      echo '<div align="center"> No se puede insertados los datos a la tabla empleados' . $conn->error . '</div>';
    } 
	else 
	{
      echo '<div  align="center">Informacion insertada correctamente.</div>';
    }
  } 
  else
   {
	  echo '<div  align="center">Ingrese todos los campos requeridos.</div>';
  }
  }
  /*Cargar datos*/
/*$query = 'select * from empleado';
$result = $conn->query($query);
if(!$result)die($conn->error);
$num_rows = $result->num_rows;
$conn = new Mysqli($host, $usuario,$cont,$bdd);*/
?>
<p align="center">
          <a href="./index.php">Formulario de registro</a>
        </p>
        
<!--Fuentes de consulta
https://www.youtube.com/watch?v=Av7ieWUhuFY
https://www.youtube.com/watch?v=WSWuSc-0hS8
https://www.youtube.com/watch?v=X2Ih7PbAxV8
https://www.youtube.com/watch?v=RZvIarvIAcQ
https://www.youtube.com/watch?v=4YkUYcczW2Y
https://www.youtube.com/watch?v=jbP4ndpepOo-->        
</body>
</html>