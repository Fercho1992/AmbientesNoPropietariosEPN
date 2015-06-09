
<!--ESCUELA POLITECNICA NACIONAL-->
<!--ESCUELA DE FORMACION DE TECNOLOGOS-->
<!--AMBIENTES No PROPIETARIOS-->
<!--FERNANDO MOYA-->
<!--09/06/2015-->

<?php error_reporting (0);//Desactivar errores Notice Undefined
$conn = new mysqli($host, $usuario, $cont, $bdd);
if($conn->connect_error) 
  die($conn->connect_error);
/*echo '<pre>';
print_r($_POST);
echo '</pre>';*/
if($_POST){
  $aut = $_POST['autor'];
  $titulo = $_POST['titulo'];
  $tipo = $_POST['tipo'];
  $anio = $_POST['anio'];
  if($aut != '' && $titulo != '' && $tipo != '' && $anio != ''){
    $q_insert = "INSERT INTO clasicos(autor,titulo,tipo,anio)
                  VALUES ('$aut', '$titulo', '$tipo', '$anio')";
    $res = $conn->query($q_insert);
    if(!$res){
      echo '<div><font color="red">Existi&oacute; un error al insertar.' . /*$conn->error .*/ '</font></div>';
    } else {
      echo '<div>!Felicitaciones!. Libro insertado correctamente.</div>';
    }
  } else {
    echo '<div><font color="red">Ingrese todos los campos del formulario.</font></div>';
  }
}
/* CARGAR DATOS */
$query = 'SELECT * FROM clasicos';
$result = $conn->query($query);
if(!$result) die($conn->error);
$num_rows = $result->num_rows;

/*Verificamos si selecciono el boton eliminar
  print_r($_POST);
if($_POST['eliminar']=='Eliminar'&&$_POST['id']=='$id')
{
  //Sentencia SQL para eliminar un registro
  $sql="DELETE FROM clasicos where id='".$_POST['id']."'";
  $resultado=mysql_query($sql);
  if(!$resultado)
  {
    die ('Error al eliminar el registro'.mysql_error());
  }
  else
  {
    echo"Registro eliminado con exito";
  }


}*/

/*if($_POST['eliminar']=='Eliminar' && $_POST['id']=='$row[id]')
{
mysql_query("DELETE from clasicos where id='$row[id]'")
or die("Error al eliminar");
echo '</table>';
}*/
/*$id = $_POST['id']; 
$query ="delete from clasicos where id='$id'";*/

?>
<!--Documento HTML-->
<html>
<head>
  <title>Libros</title>
</head>
<body >
<div align="center">
<form method="post" >
<section align="center">
  <div><h1>Ingresar nuevo libro en la tabla "clasicos"</h1></div>
  <p>
  <!--<div>
    <input type="text" name="buscar" value="" id="buscar">
    <input type="submit" name="btnBuscar" value="Buscar" id="btnBuscar">
  </div>
  <p>-->

  <!--Autor-->
  <div>
    <label for="autor">Autor: </label>
    <input type="text" name="autor" value="" id="autor">
  </div>
  <!--Titulo-->
  <p>
  <div>
    <label for="titulo">T&iacute;tulo: </label>
    <input type="text" name="titulo" value="" id="titulo">
  </div>
  <!--Tipo-->
  <p>
  <div>
    <label for="tipo">Tipo: </label>
    <input type="text" name="tipo" value="" id="tipo">
  </div>
  <!--Anio-->
  <p>
  <div>
    <label for="anio">A&ntilde;o: </label>
    <input type="text" name="anio" value="" id="anio">
  </div>
  <!--Ingresar-->
  <p>
  <div>
    <input type="submit" value="Ingresar" name="ingresar">
  </div>
  <p>
  <!--<div>
  <input type="submit" name="boton"value="Eliminar"/>
  </div>-->
  </div>
  <hr width=50% align="center">
</form>
<!--Documento en PHP-->
<?php error_reporting (0);//Desactivar errores Notice Undefined
echo'<table border=1 align="center">';
echo'<tr>';
echo'<th>Id:</th>'; 
echo'<th>Autor:</th>'; 
echo'<th>Titulo:</th>'; 
echo'<br>';
echo'<th>Tipo</th>';
echo'<br>';
echo'<th>A&ntilde;o</th>'; 
echo'<th>Opcion</th>'; 
echo'</tr>';
for($j = 0; $j < $num_rows; ++$j){
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_ASSOC);
echo'<tr>';
echo '<td> ' . $row['id'] . '</td>';
  echo '<td> ' . $row['autor'] . '</td>';
  echo '<td> ' . $row['titulo'] . '</td>';
  echo '<td> ' . $row['tipo'] . '</td>';
  echo '<td> ' . $row['anio'] . '</td>';
  echo '<td> 
  <form method="post">
  <input type="submit" value="Eliminar" name="eliminar">
  <input type="hidden" value="' . $row['id'] . '"  name="id">
  </form></td>';
  echo'</tr>';
}
if ($_POST) {
    $id = $_POST['id'];
    $query_eliminar = "DELETE FROM clasicos WHERE id=$id";//Sentencia SQL para borrar un registro de la tabla clasicos
    $resu = $conn->query($query_eliminar);
    if (!$resu) {
        echo '<div><font color="red">Error al borrar el registro.</font></div>';
    } else {
        echo '<div>Felicitaciones! Libro borrado exitosamente</div>';
    }
  }


//mysql_close($conn);
//echo "Datos eliminados correctamente";

/*$q="DELETE * FROM clasicos where id=".$_POST['id'];
$rs = mysql_query($q);
if($rs==false)
{
  echo 'Error';
}
else
{
  echo 'Se han eliminado';
}*/


/*$variable="";
$variable1="";
$variable2="";
$variable3="";
$variable4="";

if(isset($_POST["btnBuscar"]))
{
  $boton=$_POST["btnBuscar"];
  $busqueda =$_POST["buscar"];

  if($boton=="Buscar")
  {
    $sql="select * from clasicos where id='$id'";
    $cs=mysql_query($sql);
    /*while($resul=mysql_fetch_array($cs))
    {
      $variable=$resul[0];
      $variable1=$resul[1];
      $variable2=$resul[2];
      $variable3=$resul[3];
      $variable4=$resul[4];
    }
  }

  if($boton=="Eliminar")
  {
    $boton=$_POST["buscar"];
    $sql="delete from clasicos where id='$row[id]'";
    $cs=mysql_query($sql,$conn);
    echo "Se elimino con exito";
  }

}*/
//Cerrar la conexion con la base de datos
$result->close();
$conn->close();
?>
</body>
</html>