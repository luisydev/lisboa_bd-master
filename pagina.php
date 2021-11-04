<?php 
require_once 'config/sesion.php';
$global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
$global .= "/lisboa_bd/config/global.php";
require_once($global); 
?>
<?php //llamamos al controlador para traer datos de la url
require (ROOT . "/controller/pagina_controller.php") ?>
<?php// require (ROOT . "/parts/head_pagina.php"); ?>
<?php require (ROOT . "/model/paginamodel.php") ?>