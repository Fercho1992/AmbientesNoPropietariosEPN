<!--Pagina de inicio en PHP-->

<html>
    <head>
        <title>Inicio</title>
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="estilo.css">
        <p>
         <h1><label>NOTAS</label></h1>
  
           Puede ver sus notas:
           <select name="seleccionar" id="select">
                <option>Notas de programacion</option>
                <option>Notas de redes</option>
         </select>        
       </p>
       <p>
           Notas:
           <br>
           <INPUT type="checkbox" name="nota1" value="Tabla">Programacion<br />
       </p>  
       <p>
        <input type="submit" value="Ver" />
       </p>
           <!--Codigo que permite visualizar las notas-->
           <?php
           //Array para los estudiantes de la materia de programacion
           $estudiantes_Progra  = array('Pedro' => '8',
           	'David' => '3',
           	'Andrea' => '10',
           	'Esteban' => '7',
           	'Daniela' => '10');

           //Array para los estudiantes de la materia de redes

           $estudiantes_Redes  = array('Gabriela' => '6',
           	'Maria' => '9',
           	'Andrea' => '10');
           ?>

           
           <?php
           echo '<link rel="stylesheet" type="text/css" href="/estilo.css">';

           echo'<table border="1" >';
           
           echo'<tr>';
           echo'<td>Estudiantes</td>';
           echo'<td>Nota</td>';
           echo '</tr>';


           //Para imprimir los estudiantes  de programacion	
           foreach ($estudiantes_Progra as $estudiante => $nota) {
           	echo'<tr>';
           echo'<td>'.$estudiante.'</td>';
           echo '<td>'.$nota.'</td>';
           echo '</tr>';
           }
           echo '</table>';
           echo '<br>';
           
           	//Para imprimir los estudiantes  de redes
           echo'<table border="1">';
           echo'<tr>';
           echo'<td>Estudiantes</td>';
           echo'<td>Nota</td>';
           echo '</tr>';
           foreach ($estudiantes_Redes as $estudiante => $nota) {
           	echo'<tr>';
           echo'<td>'.$estudiante.'</td>';
           echo '<td>'.$nota.'</td>';
           echo '</tr>';
           }
           echo '</table>';
           ?>

    </body>
</html>


