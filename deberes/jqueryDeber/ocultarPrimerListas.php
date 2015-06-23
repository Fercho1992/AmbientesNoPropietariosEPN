<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ocultar los primeros elementos de ambas listas</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<!--Ahora ocultar los primeros elementos de las dos listas..
Lista 1:
Tortilla
Jamón
Queso
Lista 2:
Coca Cola
Leche
Té-->
<body id="cuerpo">
<div>
<!--Lista1-->

<h1 class="intro" align="center">Lista 1:</h1>
<ul type="circle" id="lista1" align="center">
<li class="selector" id="primeroL1" align="center">Tortilla
<li class="selector" id="segundoL1" align="center">Jamon
<li class="selector" id="terceroL1" align="center">Queso
</ul>
</div>
<!--Lista2-->
<div>
<h1 class="intro">Lista 2:</h1>
<ul type="circle" id="lista2" >
<li class="selector2" id="primeroL2" align="center">Coca Cola
<li class="selector2" id="segundoL2" align="center">Leche
<li class="selector2" id="terceroL2" align="center">Te
</ul>
</div>
<!--<button id="seleccionar"> Seleccionar </button>-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
	//Al dar click sobre el primer elemeto de la lista1
	$("#lista1").click(function()
	{
		$('#primeroL1').hide(3000).css('text-decoration','underline');
			});
	
	//Al dar click sobre el primer elemeto de la lista2
	$("#lista2").click(function()
	{
		$('#primeroL2').hide(3000).css('text-decoration','underline');
	});
	

	
	//$(".padre").click(function(){
		//$('.selector').hide(3000)
		//$('ul>li').first().hide(3000).css('text-decoration','underline')
		//cogemos el iid del li por el que estamos pasando por encima el mouse
		//var id=$(this).attr("id");
	//},function()
	//{
		//este funcion se ejecuta cuando pierde el foco
		
		//var id=$(this).attr("id");
		//$("."+id).hide();

});

</script>

</body>
</html>