<?php
//no hacemos funcion de consulta porque es de uso único y como no es recurrente, para que queremos una función...
$consulta_sql ="SELECT * FROM contenido INNER JOIN tags ON contenido.id=tags.id WHERE tag1='$idTag' OR tag2='$idTag' OR tag3='$idTag' OR tag4='$idTag'";
$resultados = $conexion->query($consulta_sql)
or die ("Algo ha ido mal en la consulta de la bbase de datos");
if($resultados->num_rows == 0){
    header("location: index.php");
}
require (ROOT . "/parts/head_sin_metadata.php");
require (ROOT . "/parts/header.php");
require (ROOT . "/view/tags_view.php");
require (ROOT . "/parts/footer.php");
?>
