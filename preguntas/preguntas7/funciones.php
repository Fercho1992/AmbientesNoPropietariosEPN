<?php



function generar_HTML()
{
	$paises_capitales = array (
	'Ecuador' => 'Quito',
	'Argentina'=> 'Buenos Aires',
	'Brasil'=>'Brasilia',
	'Chile'=>'Santiago',
	'Colombia'=>'Bogota'
	);
	
	echo '<html>';
	echo '<head>';
	echo '</head>';
	echo '<title>Paises y capitales </title>';
	echo '<body>';

	echo '<table>';
	echo ''; 

	echo '</table>' ; 
	foreach ($pais_capitales as $capital)
		echo '<tr>';
	for($i=0; $i<=5;$i++)
		echo '<td>';
	echo isset ($capital[$i])? $capital[$i]:'';
	echo '</td>';
	echo '</tr>';
	echo '</body>';
	echo '</html>';
}
  
?>