<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Metodo focus y blur</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<!--Utilizar los métodos focus() y blur() para cambiar el color de dos
cuadros de texto cuando posicionamos el foco y cuando lo retiramos.-->
<body id="cuerpo">
<h1 id="encabezado" align="center">Metodos focus(), blur() </h1>
<div id="message" align="center">
<input type="text" id="txtNombre" value="Fernando">
<input type="text" id="txtApellido" value="Moya">
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//Metodo focus() y blur() para el campo txtNombre
 $("#txtNombre").focus(function(){
	 $(this).animate({opacity: 0.3 }, 400).css('background-color', '#4B8A08')//#4B8A08 Color verde
 })
 $("#txtNombre").blur(function(){
	 $(this).animate({opacity: 0.3 }, 400).css('background-color', '#DF0101')//#DF0101 Color rojo
 });
 
 //Metodo focus() y blur() para el campo txtApellido
 $("#txtApellido").focus(function(){
	 $(this).animate({opacity: 0.3 }, 400).css('background-color', '#4B8A08')//#4B8A08 Color verde
 })
 $("#txtApellido").blur(function(){
	 $(this).animate({opacity: 0.3 }, 400).css('background-color', '#DF0101')//#DF0101 Color rojo
 });
 
 
});

</script>
<!--Fuente de consulta  para usar el evento hover
http://web.tursos.com/jquery-rapido-y-facil-eventos/
http://www.mkyong.com/jquery/jquery-find-example/
-->
</body>
</html>