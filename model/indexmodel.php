<?php
// Si un usuario entra con una URL index.php cargará indexview.php
//Si el usuario aprieta el botón de bloques de la página index, se cargará index_blocks_view.php
//Si el usuario aprieta el boton de grid se cargara indexview de nuevo.
//Hace falta añadir los botones en los view
$resultados = getAll();
$data3 = getMetadataByIdmd(1);
require (ROOT . "/parts/head.php");
require (ROOT . "/parts/header.php");
if ($d=="grid") {
    require (ROOT . "/view/index_view.php");
} else {
    if ($d == "block") {
        require (ROOT . "/view/index_blocks_view.php");
    } else {
        require (ROOT . "/view/index_view.php");
    }    
}
require (ROOT . "/parts/footer.php");
?>
