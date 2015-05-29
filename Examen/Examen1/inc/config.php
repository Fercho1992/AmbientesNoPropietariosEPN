<?php

$usuarios = array
    (
    'juan', 'contraseña' => '123456',
    'maria', 'contraseña' => '654321',
    'andres', 'contraseña' => '0987654',
);

if ($_POST) {
    $usuario = $_POST ['usuario'];
    $contraseña = $_POST ['contraseña'];
    if ($usuario == "" && $contraseña == "") {
        header('Location: index.php');
        exit();
        echo 'Debe poner Usuario y Contraseña';
    }
    foreach ($usuarios as $usua)
        if ($usuario = $_POST[$usua] and $contraseña = $_POST[$usua]) {
            session_start();
            header('Location: inicio.php');
            exit();
        } else {
            header('Location: index.php');
            echo 'El usuario o Contraseña incorrecta';
            exit();
        }
}

function tablacolores() {
    $estudiantesProgra = array('Pedro' => '8',
        'David' => '3',
        'Andrea' => '10',
        'Esteban' => '7',
        'Daniela' => '10'
    );
    $estudiantesRed = array('Gabriela' => '6',
        'Maria' => '9',
        'Andrea' => '10');
    echo '<html>';
    echo'<head>';
    echo '<body>';
    echo'<table id= "progra">';
    echo'<tr>';
    echo'<td2 colspan="2">Programacion</td2>';
    echo'</tr>';
    echo'<tr>';
    echo'<td>Etusiante</td>';
    echo'<td>Nota</td>';
    echo'</tr>';

    foreach ($estudiantesProgra as $estudiant => $nota) {
        echo '<tr>';
        echo'<td>' . $estudiant . '</td>';
        echo '<td>' . $nota . '</td>';
        echo'</tr>';
    }
    echo '</table>';

    echo'<table id= "redes1">';
    echo'<tr>';
    echo'<td1 colspan="2">Redes</td1>';
    echo'</tr>';
    echo'<tr>';
    echo'<td>Etusiante</td>';
    echo'<td>Nota</td>';
    echo'</tr>';
    foreach ($estudiantesRed as $estu => $notared) {
        echo'</tr>';
        echo'<td>' . $estu . '</td>';
        echo '<td>' . $notared . '</td>';
        echo'</tr>';
    }
    echo '</table>';
    echo '</html>';
    echo'</head>';
    echo '</body>';
}

?>
