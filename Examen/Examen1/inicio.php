<?php 
include './inc/config.phpconfig.php';
include './css/estilos.css';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="inicio.php" method="POST"  >
            <label> Opciones: </label>
            <br>
            <select name="opciones">
                <option value="progra">Ver notas de programacion</option>
                <option value="redes">Ver notas Redes </option>
            </select>
            <br
            <label> Presentar tabla de valores</label>
            <input type="checkbox" name="colores">
            <br>
            <input type="submit"  value="Ver" >
        </form>
        tablacolores();
    </body>
</html>


