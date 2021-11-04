<?php
/********CONEXIÓN A BASE DE DATOS TIPO 2 - CPN PDO Y USANDO TRY/CATCH****/
try {
  $conexion = new PDO('mysql:host=localhost; dbname=lisboa_bd', 'root','');
  echo "Conexión correcta";
  $conexion->exec("set names utf8");
} catch (PDOException $_e) {
  //Obtener errores
  echo "Error: " . $e->getMessage();
}

?>