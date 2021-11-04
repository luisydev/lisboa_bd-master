<?php
$global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
$global .= "/lisboa_bd/config/global.php";
require_once($global);
//BUSCAMOS EL ID DEL ANTERIOR ULTMIO ARTICULO
$sql = "SELECT id FROM contenido ORDER BY id DESC LIMIT 1";
$ultimoId = $conexion->query($sql);
$ultimoId = $ultimoId->fetch_array(); //tb funcionaria con el fetc_array
//print_r($ultimoId);
echo  "el último articulo tenia un id $ultimoId[0]";
$ultimoId[0] = $ultimoId[0] + 1; //incrementamos en 1 para tener el nuevo id que vamos a guardar
//traemos los datos de cada NAME del formulario y lo asignamos a VARIABLES a través del método $_POST
$titular = $_POST['titular'];
$fecha = $_POST['fecha'];
$articulo = $_POST['articulo'];
$autor = $_POST['autor'];
$tags = $_POST['tags'];
$imagen = $_POST['imagen'];

$sql = "INSERT INTO contenido (titular, fecha, texto, autor,  url, imgPrincipal ) VALUES ('$titular', '$fecha', '$articulo', '$autor','temporal' ,'$imagen')";
if ($conexion->query($sql)){
    echo "Registro agregado a la base de datos CONTENIDO";
}  else {
        echo "No se ha podido agregar nada a la base de datos";
    }
 

    $sql = "SELECT id FROM contenido ORDER BY id DESC LIMIT 1";
$ultimoId = $conexion->query($sql);
$ultimoId = $ultimoId->fetch_array(); //tb funcionaria con el fetc_array
//print_r($ultimoId);
//echo  "el último articulo tenia un id $ultimoId[0]";
$sql = "UPDATE contenido SET url='pagina.php?id=$ultimoId[0]' WHERE id='$ultimoId[0]'";
$conexion->query($sql);

/*SECCION DE INSERCION DE TAGS EN TABLA*/

$tagsArray = explode(',',$tags);//saca un array del string $tags
print_r($tagsArray);
print_r($ultimoId[0]);

while (count($tagsArray) <4) {
   array_push($tagsArray, ""); 
}

$sql = "INSERT INTO tags (id, tag1, tag2, tag3, tag4) VALUES ('$ultimoId[0]','$tagsArray[0]', '$tagsArray[1]', '$tagsArray[2]', '$tagsArray[3]')";

if ($conexion->query($sql)){
    echo "Registro agregado a la base de datos TAGS";
}  else {
        echo "No se ha podido agregar nada ala base de datos";
    }

?>