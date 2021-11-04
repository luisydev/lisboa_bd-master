<?php //creamos la variable de la página para identificar su contenido
//$idPagina = intval($_GET['id']);
//require 'conexion.php';

//INSERTAMOS LA CONSULTA DESDE PAGINA.PHP

if(isset($_GET['id'])  && is_numeric ($_GET['id'])){
    $idPagina = intval(htmlspecialchars($_GET['id']));
    }else {
       header("location:index.php");
    }
   
?>