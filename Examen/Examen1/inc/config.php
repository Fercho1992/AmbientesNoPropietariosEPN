<?php
session_start();
// Definimos las constantes que nos pueden ser útiles en todo el sitio.
define('DOCUMENT_ROOT_RELATIVA', '/Examen1/');
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);
// incluimos las utilidades
//require_once( 'utils.php' );
// Si no hay una sesión creada, se va ha redireccionar a la pagina index.php para que vuelva a iniciar sesión.
if( $_SERVER['REQUEST_URI'] != DOCUMENT_ROOT_RELATIVA . 'index.php' ){
  if( !isset( $_SESSION['username'] ) ) {
     header ('LOCATION:index.php' );
  }
}