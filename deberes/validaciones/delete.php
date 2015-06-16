<!--ESCUELA POLITECNICA NACIONAL-->
<!--ESCUELA DE FORMACION DE TECNOLOGOS-->
<!--AMBIENTES NO PROPIETARIOS-->
<!--FERNANDO MOYA-->
<!--16/06/2015-->

<!--Bloque HTML-->
<html>
<head>
<meta charset="utf-8">
<title>Eliminar Registro</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>

<!--Bloque PHP-->
<?php 

$conn = new Mysqli($host,$usuario,$cont,$bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

if($_POST){
	$id = $_POST['id'];
	$q_delete = "delete from empleado where id ='$id'";/*Sentecnia SQL para eliminar registros de la tabla empleados*/
	$r= $conn->query($q_delete);
	if(!$r){
		echo '<div align="center">No se puede eliminar el registro seleccionado</div>';
	}else{
		echo '<div align="center">Registro eliminado exitosamente</div>';
	}
	
}
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