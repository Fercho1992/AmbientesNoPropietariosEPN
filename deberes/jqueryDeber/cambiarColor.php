<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cambiar colores de las celdas al pasar el cursor del mouse</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!--Utilizar los métodos focus() y blur() para cambiar el color de dos
cuadros de texto cuando posicionamos el foco y cuando lo retiramos.-->
<p align="center">Filas de colores</p>
<table id="tabla" width="200" border="1" align="center">
  <tbody id="color">
    <tr >
      <td>Fila1</td>
      <td>Fila9</td>
    </tr>
    <tr>
      <td>Fila2</td>
      <td>Fila10</td>
    </tr>
    <tr>
      <td>Fila3</td>
      <td>Fila11</td>
    </tr>
    <tr>
      <td>Fila4</td>
      <td>Fila12</td>
    </tr>
    <tr>
      <td>Fila5</td>
      <td>Fila13</td>
    </tr>
    <tr>
      <td>Fila6</td>
      <td>Fila14</td>
    </tr>
    <tr>
      <td>Fila7</td>
      <td>Fila15</td>
    </tr>
    <tr>
      <td>Fila8</td>
      <td>Fila16</td>
    </tr>
  </tbody>
</table>
<div align="center">
  <script type="text/javascript" src="js/jquery.js"></script>
</div>
<script type="text/javascript">
$(document).ready(function()
{
 $("#tabla").hover(function()
 {
	 $(this).append($("Hover"));
 }, 
 function()
 {
	 $(this).find("Last").remove();
});
});

  </script>
</body>
</html>