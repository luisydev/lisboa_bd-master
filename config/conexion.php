<?php
/*********CONEXIÓN A BASE DE DATOS TIPO 1 - CON SQLI */
$conexion = new mysqli($db["host"], $db["user"], $db["password"], $db["database_name"]);
$conexion->set_charset("utf8");
//// vamos a poner un condicional para ver si se nos conecta bien a la bbdd o no, solo para pruebas:
if ($conexion->connect_errno) {
  //// echo 'Conexión Fallida';  ---- esto seria una posibilidad
  die('Conexión Fallida!');
} else {
// echo '<h2>La base de datos LISBOA_BD se ha conectado correctamente!.</h2>';// esto solo para pruebas iniciales
}
?>