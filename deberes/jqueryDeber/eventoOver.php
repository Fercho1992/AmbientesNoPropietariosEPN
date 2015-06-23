<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mensaje utilizando el evento hover</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<!--Utilizar el evento hover para mostrar un mensaje en un div #mensaje
cuando nos posicionamos sobre un el y otro cuando salgamos de el.-->
<body id="cuerpo">
<h1 id="encabezado" align="center">Evento Hover</h1>
<div id="message" align="center">Mensaje dentro del div utilizando :

</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//Muestra mensaje cuando se pasar el cursor del mouse por el div
 $("#message").hover(function(){
	 $(this).animate({opacity: 0.3 }, 400).append("<span>Evento Hover dentro del div </span>")}, 
 function()
 {
	 $(this).find("span:last").remove().animate({opacity: 1 }, 400);
})

//Muestra mensaje cuando se pasar el cursor del mouse por el encabezado
$("#encabezado").hover(function(){
	 $(this).animate({opacity: 0.3 }, 400).append("<span> Fuera del div</span>")}, 
 function()
 {
	 $(this).find("span:last").remove();
})
});

</script>
<!--Fuente de consulta  para usar el evento hover
http://web.tursos.com/jquery-rapido-y-facil-eventos/
http://www.mkyong.com/jquery/jquery-find-example/
-->
</body>
</html>