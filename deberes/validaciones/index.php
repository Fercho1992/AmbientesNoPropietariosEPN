<!--ESCUELA POLITECNICA NACIONAL-->
<!--ESCUELA DE FORMACION DE TECNOLOGOS-->
<!--AMBIENTES NO PROPIETARIOS-->
<!--FERNANDO MOYA-->
<!--16/06/2015-->

<!--Bloque PHP-->
<?php error_reporting (0);//Desactivar errores Notice Undefined
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);
?>

<!--Bloque HTML-->
<html>
<head>
<meta charset="utf-8">
<title>Registro de empleados</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" 

src="js/validation.js">

</script>

</head>

<body id="cuerpo">

<form id="form1" method="post" action="insert.php" onsubmit = "return validar(this)"  >

  <div>
    <h1 align="center">MAC Solution S.A.</h1>
    <h1 align="center">Registro de nuevos empleados</h1>
        <div align="center">
          <table id="formulario" width="501" border="1">
              <tr>
                <td width="110">Nombre:</td>
                <td width="322"><input name="nombre" type="text" id="nombre" value=""></td>
              </tr>
              <tr>
                <td>Apellido:</td>
                <td><input type="text" name="apellido" id="apellido"></td>
              </tr>
              <tr>
                <td>Fecha de nacimiento:</td>
                <td><input type="text" name="fechaNacimiento" id="fechaNacimiento"></td>
              </tr>
              <tr>
                <td>Direccion:</td>
                <td><input type="text" name="direccion" id="direccion"></td>
              </tr>
              <tr>
                <td>Telefono:</td>
                <td><input type="text" name="telefono" id="telefono"></td>
              </tr>
              <tr>
                <td height="33">Estado Civil:</td>
                <td><input type="radio" name="estadoCivil" id="Soltero" value="soltero">
                  <label for="estadoCivil">Soltero
                    <input type="radio" name="estadoCivil" id="Casaso" value="casado">Casado
                    <input type="radio" name="estadoCivil" id="Viudo" value="viudo">Viudo
                     <input type="radio" name="estadoCivil" id="unionLibre" value="unionLibre">Union Libre
                     <br>
              <tr>
                <td>Departamento:</td>
                <td><input type="text" name="departamento" id="departamento"></td>
              </tr>
              <tr>
                <td colspan="2">
                <div align="center">
                  <input type="submit" name="Ingresar" id="Ingresar" value="Ingresar"  >
                </div></td>
              </tr>
          </table>
      </div>
      <div id="text">
      </div><!--Div que permite visualizar los mensajes de error cuandro no se ingresa informacion en cada uno de los campos de formulario-->
    <p align="center">&nbsp;</p>
    <p>&nbsp; </p>
  </div>
</form>
<!--Bloque PHP-->
<?php
  /*Cargar datos de la base de datos Empresa*/
$query = 'select * from empleado';
$result = $conn->query($query);
if(!$result)die($conn->error);
$num_rows = $result->num_rows;
$conn = new Mysqli($host, $usuario,$cont,$bdd);
?>
<!--Bloque PHP-->
<?php error_reporting (0);//Desactivar errores Notice Undefined

echo'<table border="1" align="center">';
echo'<tr>';
echo'<th>ID</th>';
echo'<th>Nombre</th>'; 
echo'<th>Apellido</th>'; 
echo'<th>Fecha Nacimiento</th>';
echo'<th>Direccion</th>'; 
echo'<th>Telefono</th>'; 
echo'<th>Estado Civil</th>'; 
echo'<th>Departamento</th>'; 
echo'<th>Opciones</th>'; 
echo'</tr>';

for($j = 0; $j < $num_rows; ++$j){
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_ASSOC);


echo'<tr>';
echo '<td> ' . $row['id'] . '</td>';
  echo '<td> ' . $row['nombre'] . '</td>';
  echo '<td> ' . $row['apellido'] . '</td>';
  echo '<td> ' . $row['fechaNacimiento'] . '</td>';
  echo '<td> ' . $row['direccion'] . '</td>';
  echo '<td> ' . $row['telefono'] . '</td>';
  echo '<td> ' . $row['estadoCivil'] . '</td>';
  echo '<td> ' . $row['departamento'] . '</td>';
  echo '<td>
  <form action ="delete.php" method="post" >
	  <input type="submit" value="Eliminar" name="eliminar">
	  <input type="hidden" value="' . $row['id'] . '"  name="id">
	  </form>
	  <form action ="search.php" method="post" >
	  <input type="submit" value="Modificar" name="modificar">
	  <input type="hidden" value="' . $row['id'] . '"  name="id">
	  </form></td>';
  echo'</tr>';
}
echo '</table>';

$result->close();
$conn->close();

?>
<!--Fuentes de consulta
https://www.youtube.com/watch?v=Av7ieWUhuFY
https://www.youtube.com/watch?v=WSWuSc-0hS8
https://www.youtube.com/watch?v=X2Ih7PbAxV8
https://www.youtube.com/watch?v=RZvIarvIAcQ
https://www.youtube.com/watch?v=4YkUYcczW2Y
https://www.youtube.com/watch?v=jbP4ndpepOo
-->
</body>
</html>