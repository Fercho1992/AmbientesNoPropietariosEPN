<?php
$result = "";
// print_r($_POST);
if ( $_POST ) {
  $name = htmlentities($_POST['nombre']);
  $email = htmlentities($_POST['email']);
  $msg = htmlentities($_POST['mensaje']);
  $noticia = htmlentities( $_POST['noticia'] );
  
  $conn = new mysqli($host, $usuario, $cont, $bdd);
  if( $conn->connect_error ) 
    $result = "No se puede establece la conexión con la BDD formulario";
  else
  {
    if($name !='' && $email !='' $msg='')
    {
      /*Sentencia SQL para instertar datos en la tabla mensajes*/
    $q_insert = "INSERT INTO mensajes(nombre,email,mensaje,noticias)
                  VALUES ('$name', '$email', '$msg', '$noticias')";

    $res = $conn->query($q_insert);

    if(!$res)
    {
      $result = 'Error al insertar.' . $conn->error;
    } 
    else 
    {
      $result = 'Mensaje enviado con exito.';
    }
  }
  $query='select * from mensajes';
  $result=conn->query($query);
  if(!result)
    die($conn->error);
  $num_rows=$result->num_rows;
}
echo json_encode( $result );
?>