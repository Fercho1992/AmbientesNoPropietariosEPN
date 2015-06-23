<!--ESCUELA POLITECNICA NACIONAL-->
<!--ESCUELA DE FORMACION DE TECNOLOGOS-->
<!--AMBIENTES NO PROPIETARIOS-->
<!--FERNANDO MOYA-->
<!--23/06/2015-->
<!-- 
Crear un documento que presente un formulario con un cuadro de
texto “Intereses” y dos botones: “agregar” y “eliminar”. Al dar clic en
el botón “agregar” se debe agregar un cuadro de texto al formulario.
Al dar clic en el botón “eliminar” se debe eliminar el último cuadro de
texto.-->

<!--Agregar un botón submit “guardar intereses” al formulario anterior
que permita enviar el formulario por POST y escribir código PHP que
permita guardar todos los cuadros de texto en una BDD.-->

<!--Escribir código PHP que permita recuperar de la BDD todos los
intereses guardados en el ejercicio anterior y los cargue en un
formulario para poder modiﬁcarlos. La modiﬁcación implica cambiar,
agregar o eliminar intereses. Se deben generar tantos cuadros de texto
como intereses se hayan guardado.-->


<?php error_reporting (0);//Desactivar errores Notice Undefined
$conn = new Mysqli($host,$usuario,$cont,$bdd);
if ($conn->connect_error)
    die($conn->connect_error);
	
$query = 'select * from interes';
$result = $conn->query($query);
if (!$result)
    die($conn->error);
$num_rows = $result->num_rows;
?>

<html>
    <head>
        <title>Intereses</title>
        <link rel="shortcut icon" href="image/EPN.ico"/>
		<link href="style/style.css" rel="stylesheet" type="text/css">
    </head>
    <body id="cuerpo">
    <form method="POST" action="index.php" >
            <div></div>
            <div align="center"><br>
              <br>
            </div>
      <h1 align="center">
      Intereses:
      <h1>
      <div align="center"><br>
              <br>
            </div>
              <div align="center">
                <input type="text" name="interes" class="interesPersona">
              </div>
              <div align="center">
                <input type="button" id="crear" value="Crear" class="crea">
              </div>
            <div align="center"><br>
              <input type="submit" id ="guardar" value="Guardar tipo de interes" name="Guardar" >
              <input type="button" id="eliminar" value="Eliminar">
            </div>
    </form>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
        </script>
    </body>
</html>

<?php
//Consulta de Eliminar
$conn = new Mysqli($host,$usuario,$cont,$bdd);
if ($_POST[Eliminar]) {
    $id = $_POST['id'];
    $q_delete = "delete from interes where id=$id";
    $resultado = $conn->query($q_delete);
    if (!$resultado) {
        echo '<div>Revise, no se puede eliminar el interes </div>';
    } else {
        echo '<div>Interes borrado con exito </div>';
    }
}
$conn->close();
?>

<?php
echo'<center><h1 id="encabezado">Intereses por persona</h1></center>';
echo'<table border="1" align="center">';
echo'<tr>';
echo '<th>' . 'Interes' . '</th>';
echo'</tr>';
for ($j = 0; $j < $num_rows; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
	echo'<tr>';
echo '<td> ' . $row['id'] . '</td>';
  echo '<td> ' . $row['interes'] . '</td>';
echo'</tr>';
}
echo'</table>';
$result->close();
$conn->close();
?>

<?php error_reporting (0);//Desactivar errores Notice Undefined
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nombre = $_POST['interes'];

	if($interes != ''){
		/*Sentencia SQL para insertar informacion en la tabla empleado*/
    $q_insert = "insert into interes(nombre)
                  values ('$interes')";
    $res = $conn->query($q_insert);
	
    if(!$res)
	{
      echo '<div align="center"> No se puede insertados los datos a la tabla intereses' . $conn->error . '</div>';
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