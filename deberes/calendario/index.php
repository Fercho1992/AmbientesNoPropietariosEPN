<?php

//Definimos las variables $mes, $anio, $diaActual

$mes=date("n");

$anio=date("Y");

$diaActual=date("j");
 
//Obtenemos el dia de la semana del primer dia
//Devuelve 0 para domingo, 1 para lunes, 2 para martes, 3 para miercoles, 
//4 para jueves, 5 para viernes, y 6 para sabado

$diaSemana=date("w",mktime(0,0,0,$mes,1,$anio))+7;//mktime: Para obtener la marca de timepo UNIX de un fecha

//Obtenemos el ultimo dia del mes en curso

$ultimoDiaMes=date("d",(mktime(0,0,0,$mes+1,1,$anio)-1));//mktime: Para obtener la marca de timepo UNIX de un fecha
 
 //Array con todos los meses del año,comenzando desde Enero hasta Diciembre
$meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

?>
 
<!---Documento HTML-->
<html>
<head>
	<title>Calendario en PHP, CSS, HTML</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
 
<body >
<table id="encabezado" >

<tr>
                <td>
                    ESCUELA POLITECNICA NACIONAL</td>
            </tr>
            <tr>
                <td>
                    ESCUELA DE FORMACION DE TECNOLOGOS</td>
            </tr>
            <tr>
                <td>
                   AMBIENTES NO PROPIETARIOS</td>
            </tr>
            <tr>
                <td>
                    FERNANDO MOYA CHILLUIZA</td>
            </tr>

</table>
<table id="Calendario">

	<caption><?php echo $meses[$mes]." ".$anio?></caption>
	<tr>
		<th>Lu</th><th>Ma</th><th>Mi</th><th>Ju</th>
		<th>Vi</th><th>Sa</th><th>Do</th>
	</tr>
	<tr >
		<?php
		$ultima_celda=$diaSemana+$ultimoDiaMes;
		// Un for que va desde 1 y como maximo valor 42
		// 6 columnas de 7 dias
		for($i=1;$i<=42;$i++)
		{
			if($i==$diaSemana)
			{
				//Determinamos en que dia empieza la semana
				$dia=1;
			}
			if($i<$diaSemana || $i>=$ultima_celda)
			{
				// Celda vacia
				echo "<td>&nbsp;</td>";
			}else{
				//Mostramos el dia actual en el que estamos
				if($dia==$diaActual)
					echo "<td class='hoy'>$dia</td>";//Se resaltara la fecha actual del mes en curso
				else
					echo "<td>$dia</td>";
				$dia++;
			}

			//Cuando llega al final de la semana, comenzamos con un nueva

			if($i%7==0)
			{
				echo "</tr><tr>\n";
			}
		}
	?>
	</tr>
</table>
</body>
</html>