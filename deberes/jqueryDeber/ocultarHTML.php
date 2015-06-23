<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ocultar HTML</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<!--Bloque HTML-->
<!--Crear un documento HTML con un encabezado, dos párrafos y un
botón. Al pulsar el botón se debe ocultar todo el HTML.-->
<body id="cuerpo">
<div>
<h1 id="encabezado" align="center">Escuela Politecnica Nacional</h1>
<p id="parrafo1" align="center">Escuela de Formacion de Tecnologos </p>
<p id="parrafo2" align="center">Fernando Moya</p>
</div>
<button id="ocultar"> Ocultar </button>
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