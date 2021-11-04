<?php
require_once 'config/sesion.php';
$global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
$global .= "/lisboa_bd/config/global.php";
require_once($global); 
?>
<?php require (ROOT . "/controller/index_controller.php") ?>    
<?php require (ROOT . "/model/indexmodel.php"); ?>

