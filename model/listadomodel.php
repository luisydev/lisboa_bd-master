<?php
$resultados = getAll();
$data3 = getMetadataByIdmd(4);
require (ROOT . "/parts/head.php");
require (ROOT . "/parts/header.php");
require (ROOT . "/view/listado_articulos_view.php");
require (ROOT . "/parts/footer.php") ;
?>