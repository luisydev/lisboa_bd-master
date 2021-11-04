<?php
function getAll(){
        global $conexion;
      // SERIA MAS CORRECTO USAR LEFT JOIN 
      $consulta_sql = "SELECT * FROM contenido INNER JOIN tags
      ON contenido.id = tags.id";
      $resultados = $conexion->query($consulta_sql)
      or die ("Algo ha ido mal en la consulta a la base de datos");
      return $resultados;
}

function getContenidoById($id){
    global $conexion;
    $consulta_sql1 = "SELECT * FROM contenido WHERE id=$id";
    $resultados = $conexion->query($consulta_sql1)
    or die ("Algo ha ido mal en la consulta a la base de datos");
    if($resultados->num_rows == 0){
    header("location: index.php");
    }
    $data1 = array();
    $data1 = $resultados->fetch_assoc();
    return $data1;
}

function getTagsById($id){
    global $conexion;
    $consulta_sql2 = "SELECT * FROM tags WHERE id=$id";
$resultados2 = $conexion->query($consulta_sql2)
or die ("Algo ha ido mal en la consulta a la base de datos");
$data2 = array();
$data2 =$resultados2->fetch_assoc();
return $data2;
}

function getImgUrl(){
    global $conexion;
    $consulta_sql = "SELECT url, imgPrincipal FROM contenido";
    $resultados3 = $conexion->query($consulta_sql)
or die ("Algo ha ido mal en la consulta a la base de datos");   
return $resultados3;
}


function getMetadataByIdmd($idmd){
    global $conexion;
    $consulta_sql = "SELECT * FROM metadata WHERE idmd=$idmd";
    $resultado_metadata = $conexion->query($consulta_sql);
    
    $data3 = array();
    $data3 = $resultado_metadata->fetch_assoc();
    return $data3;
}

?>