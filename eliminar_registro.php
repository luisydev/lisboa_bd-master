<?php
$global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
$global .= "/lisboa_bd/config/global.php";
require_once($global);
//traemos los datos de cada NAME del formulario y lo asignamos a VARIABLES a través del método $_POST
$id = $_POST['id'];

//DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';

$sql = "DELETE FROM contenido WHERE id ='$id'";

if ($conexion->query($sql)){
    echo "Registro ELIMINADO de la base de datos CONTENIDO <br>";
}  else {
        echo "No se ha podido ELIMINAR nada en la base de datos<br>";
    }
  
/*SECCION DE INSERCION DE TAGS EN TABLA*/

$sql = "DELETE FROM tags WHERE id ='$id'";

if ($conexion->query($sql)){
    echo "Registro ELIMINADO de la base de datos TAGS <br>";
}  else {
        echo "No se ha podido ELIMINAR NADA de la base de datos<br>";
    }

?>