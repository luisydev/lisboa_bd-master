<?php
require_once 'config/sesion.php';
$global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
$global .= "/lisboa_bd/config/global.php";
require_once($global);
getAll(); 
?>
<?php require (ROOT . "/controller/listado_controller.php") ?>
<?php require (ROOT . "/model/listadomodel.php") ?>

