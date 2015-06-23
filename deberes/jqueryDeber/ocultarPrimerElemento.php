<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<!--Seleccionar el primer elemento de la primera lista y ocultarlo al darle clic a este elemento.
Lista 1:
Tortilla
Jamón
Queso
Lista 2:
Coca Cola
Leche
Té-->
<body id="cuerpo"> <div>
<!--Lista1-->
<h1 class="intro" align="center">Lista 1:</h1>
<ul type="circle" >
<li class="selector" id="primeroL1" align="center">Tortilla
<li class="selector" id="segundoL1" align="center">Jamon
<li class="selector" id="terceroL1" align="center">Queso
</ul>

<!--Lista2-->
<h1 class="intro" align="center">Lista 2:</h1>
<ul type="circle" >
<li class="selector" id="primeroL2" align="center">Coca Cola
<li class="selector" id="segundoL2" align="center">Leche
<li class="selector" id="terceroL2" align="center">Te
</ul>
</div>
<!--<button id="seleccionar"> Seleccionar </button>-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	
	//Se ejecuta el evento over al pasar el mouse por encima
	
	$(".selector").click(function(){
		//$('.selector').hide(3000)
		$('ul>li').first().hide(3000).css('text-decoration','underline')
		//cogemos el iid del li por el que estamos pasando por encima el mouse
		//var id=$(this).attr("id");
	//},function()
	//{
		//este funcion se ejecuta cuando pierde el foco
		
		//var id=$(this).attr("id");
		//$("."+id).hide();
	})

});

</script>

</body>
</html>