<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ocultar Boton</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<!--Bloque HTML-->
<!--Basado en el anterior. Ahora al pulsar el botón debe ocultarse dicho botón.-->
<body id="cuerpo">

<h1 id="encabezado" align="center">Escuela Politecnica Nacional</h1>
<p id="parrafo1" align="center">Escuela de Formacion de Tecnologos </p>
<p id="parrafo2" align="center">Fernando Moya</p>

<div>
<button id="ocultar"> Ocultar </button>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#ocultar").click(function(){
	$('div').hide(3000)
})
});

</script>

</body>
</html>