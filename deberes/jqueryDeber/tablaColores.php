<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tabla de colores</title>
<link rel="shortcut icon" href="image/EPN.ico"/>
<link href="style/style.css" rel="stylesheet" type="text/css">
</head>
<body id="cuerpo">
<!-- Crear un documento con una tabla. Poner el fondo de las ﬁlas pares
en rojo. A continuación poner el fondo de las ﬁlas impares en verde.-->
<h1 align="center">Tabla de colores</h1>
<table width="200" border="1" align="center">
  <tbody>
    <tr>
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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
 $("tr:odd").css("background-color", "#4B8A08"); // Filas impares
    $("tr:even").css("background-color", "#DF0101"); // Filas pares
});

</script>
</body>
</html>