<?php //require_once 'config/global.php' esta opcion no nos permite una estructura  ordenada de carpetas. Esta opción nos lia mucho por las rutas relativas ../.. etc
require_once 'config/sesion.php';
$global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
$global .= "/lisboa_bd/config/global.php";
require_once($global); 
?>
<?php require (ROOT . "/controller/tags_controller.php");?>
<?php require (ROOT . "/parts/head_sin_metadata.php") ?>
<title>Articulos con el tag:
<?php echo $idTag ;?> en Lisboa.com </title>
 <meta name="description" content="Articulos con el tag:<?php echo $idTag;
?>en nuestro sitio Lisboa.com">
</head>
<body>
<?php
require (ROOT . "/model/tagsmodel.php");
?>
