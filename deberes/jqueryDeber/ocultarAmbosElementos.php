<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ocultar encabezado y primer parrafo</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<!--Bloque HTML-->
<!--Basado en el ejercicio anterior. Suponemos que el encabezado y el
primer párrafo tienen el atributo class=“intro”.Deberás ocultar dicho
párrafo al darle clic al botón.-->
<body id="cuerpo">
<div>
<h1 class="intro" align="center">Escuela Politecnica Nacional</h1>
<p class="intro" align="center">Escuela de Formacion de Tecnologos </p>
<p id="parrafo2" align="center">Fernando Moya</p>
</div>
<button id="ocultar"> Ocultar </button>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#ocultar").click(function(){
	$('.intro').hide(3000)
})
});

</script>

</body>
</html>