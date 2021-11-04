<?php
$global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
$global .= "/lisboa_bd/config/global.php";
require_once($global);

//traemos los datos de cada NAME del formulario y lo asignamos a VARIABLES a través del método $_POST
$id = $_POST['id'];
$titular = $_POST['titular'];
$fecha = $_POST['fecha'];
$articulo = $_POST['articulo'];
$autor = $_POST['autor'];
$tag1 = $_POST['tag1'];
$tag2 = $_POST['tag2'];
$tag3 = $_POST['tag3'];
$tag4 = $_POST['tag4'];
$imagen = $_POST['imagen'];
//UPDATE Customers  SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = 1;

$sql = "UPDATE contenido SET titular='$titular', fecha='$fecha', texto='$articulo', autor='$autor',imgPrincipal='$imagen' WHERE id ='$id'";

if ($conexion->query($sql)){
    echo "Registro modificado a la base de datos CONTENIDO<br>";
}  else {
        echo "No se ha podido modificar nada en la base de datos<br>";
    }
  
/*SECCION DE INSERCION DE TAGS EN TABLA*/

$sql = "UPDATE tags SET tag1='$tag1', tag2='$tag2', tag3='$tag3', tag4='$tag4' WHERE id ='$id'";

if ($conexion->query($sql)){
    echo "Registro modificado a la base de datos TAGS<br>";
}  else {
        echo "No se ha podido modificar nada ala base de datos<br>";
    }

?>