<html>
<head>
<title>
</title>
</head>
<body>
<form action="./Formulario.php" method="POST">
<?php
//Visualizacion de la informacion introducida en el formulario
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$generos=$_POST['genero'];
$correo=$_POST['correo_electronico'];
$cuidad=$_POST['cuidad'];
$interese=$_POST['intereses'];
$biografia=$_POST['biografia'];

echo "Usted es " .$nombre;
echo " " .$apellido;
echo " su Correo es: " .$correo;
echo " de genero  ". $generos;
echo " nacido en lacuidad de ". $cuidad;
echo " y lo que mas le gusta es ".$interese;
echo ". Ademas una pequeña biografia que soy ".$biografia;

?>

<div >
      <section>
    
        <p>
            <a href="./Formulario.php">Regresar</a>
            </p>
      </section>
      </div>
      </form>
      <div >
      <section>
        <p>
          <a href="./cerrar_sesion.php">Cerrar sesión</a>
        </p>

      </section>
   </div>
</body>
</html>


