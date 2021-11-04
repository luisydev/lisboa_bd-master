<?php
$global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
$global .= "/lisboa_bd/config/global.php";
require_once($global);
    
$id = $_POST['id'];

$consulta_sql = "SELECT * FROM contenido INNER JOIN tags ON contenido.id=tags.id WHERE contenido.id=$id";
$resultado =$conexion->query($consulta_sql);
$data = array();
$data = $resultado->fetch_assoc();

$consulta_sql = "INSERT INTO contenido (titular, fecha, texto, autor, url, imgPrincipal) VALUES ('$data[titular]', '$data[fecha]', '$data[texto]', '$data[autor]', '$data[url]', '$data[imgPrincipal]')";
if($conexion->query($consulta_sql)){
    echo "Registro duplicado en la base de datos CONTENIDO <br>";
} else {
    echo "No se ha podido duplicar el CONTENIDO<br>";
    }
    //BUSCAMOS EL ID DEL ANTERIOR ULTIMO ARTÍCULO
 $sql = "SELECT id FROM contenido ORDER BY id DESC LIMIT 1";
 $ultimoId = $conexion->query($sql);
 $ultimoId = $ultimoId->fetch_array();
// ACTUALIZAMOS EL CAMPO URL DEL ULTIMO REGISTO AL CORRECTO
$sql = "UPDATE contenido SET url='pagina.php?id=$ultimoId[0]' WHERE id='$ultimoId[0]'";
$conexion->query($sql);

$consulta_sql = "INSERT INTO tags (id, tag1, tag2, tag3, tag4) VALUES ('$ultimoId[0]', '$data[tag1]', '$data[tag2]', '$data[tag3]', '$data[tag4]' ) ";
if($conexion->query($consulta_sql)){
    echo "Registro duplicado en la base de datos TAG <br>";
}  else {
        echo "No se ha podido duplicar los TAGS<br>";
    }


?>