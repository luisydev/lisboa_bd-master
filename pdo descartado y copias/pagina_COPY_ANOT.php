<?php include 'contenido.php' 
// A BORRAR UNA VEZ FUNCIONE TODO CON LA BASE DE DATOS
?>
<?php //creamos la variable de la página para identificar su contenido
$idPagina = intval($_GET['id']);
?>
<?php require 'conexion.php' ?>
<?php require 'head.php' ?>
 <title>PRACTICA PÁGINA DINAMICA CON BASE DE DATOS</title>
 <meta name="description" content="PRACTICA PÁGINA DINAMICA CON BASE DE DATOS">

</head>
<body>
    
<?php require 'header.php' ?>

<main role="main">

<!-- AQUI HAREMOS EL TEST DE CONEXION A LA BD -->
<?php
/////////////HAY 3 FORMAS DE CONECTAR, MYSQL () - MYSQLI () - PDO()
///////////// HACEMOS LA CONEXION CON UN OBJETO MYSQLI - ESTO PUEDE IR EN OTRO PHP
/////////////$conexion = new mysqli('servidor', 'usuario', 'contraseña', 'nombre de la base de datos');
//$conexion = new mysqli('localhost', 'root', '', 'lisboa_bd');
//vamos a poner un condicional, para ver si se nos conecta bien a la base de datos, luego no será necesario
//if ($conexion->connect_errno) {
  ///////////echo 'Conexión Fallida'; ----esto sería una posibilidad
//  die('Conexión Fallida!');
//} else {
//  echo '<h2>La base de datos LISBOA_BD se ha conectado correctamente!.<h2>';//esto solo para pruebas iniciales.
//}
?>


<?php
//AQUI VAMOS A TRAER LOS DATOS QUE QUEREMOS DE LA BASE DE DATOS A LA PAGINA:
$consulta_sql = "SELECT * FROM contenido WHERE id=$idPagina";//from "tabla" la bd esta llamada en conexion.php  Creamos como variable para poder reutilizarla cuando convenga.
$resultados = $conexion->query($consulta_sql);

//AQUI VAMOS A HACER UNA COMPROBACION DE LOS DATOS POR UNA CONSULTA, SOLO PARA VERLOS.
//USAMOS UN VAR_DUMP PARA VER EL CONTENIDO
/*
if ($resultados->num_rows) {
  echo '<pre>';
  echo 'Número de filas importadas: ' . $resultados->num_rows . '<br>';
  var_dump($resultados->fetch_assoc());  '</pre>'; //fetch_assoc --> traeme los datos  en un array asociativo
} else {
  echo"No se han obtenido resultados";
}
*/
//OPCION 1 DE  TRAER DATOS A UN ARRAY Y LUEGO USARLOS
// APLICAR EL FETCH_ASSOC A A SI MISMO ($RESULTADOS)
//$resultados = $resultados->fetch_assoc();
//echo '<h2>El titular: ' . $resultados['titular'] . '</h2>';


//OPCION 2 DE TRAER DATOS A UN ARRAY Y LUEGO USARLO
//APLICAR EL FETCH_ASSOC Y ASIGNARLO A OTRO ARRAY
$data1 = array();
$data1 = $resultados->fetch_assoc();
echo '<h2>El titular: ' . $data1['titular'] . '</h2>';
//LA OPCIÓN 2 PERMITE TÉCNICAS PARA MÚLTIPLES DATA EN UNA SOLA PÁGINA, ENTRE OTRAS COSAS

?>


  <section class="jumbotron text-center">
    <div class="container">
      <h1>PRACITCA PÁGINA DINAMICA CON BASE DE DATOS</h1>
      <p class="lead text-muted">Esta es la plantilla que utilizamos para mostrar cada articulo por separado</p>
      <p>
        <?php if(!$idPagina == 0){
         echo '<a href="pagina.php?id=' .  $idPagina - 1  . '"> ARTÍCULO ANTERIOR </a> | ';}//Esto hace que no se muestre nada si es el primer artículo el de esta página, para que no se muestre nada ya que iría a la pagina -1 que no existe
        ?>
        
        <a href="pagina.php?id=<?php echo $idPagina;   ?>"> ESTE ARTÍCULO </a>
        <?php if($idPagina == count(LISBOA) - 1){
          echo ' | <span class="text-muted"> No hay más artículos</span>';
        } else {
        echo ' | <a href="pagina.php?id=' . $idPagina + 1 . '"> ARTÍCULO SIGUIENTE </a> </p>';
        }
        ?>

    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
          <div class="col-md-6">
            <img src="<?php echo LISBOA[$idPagina]['imgPrincipal']?>" alt="" class="img-fluid">
          </div>
          <div class="col-md-6">
            <h2><?php echo $data1['titular']?></h2>
            <p><small><?php echo LISBOA[$idPagina]['fecha']?></small></p>
            <p><?php echo LISBOA[$idPagina]['texto']?></p>
            <p><b><?php echo LISBOA[$idPagina]['autor']?></b></p>
            <p><small><b>Tags de este articulo:</b>
            <?php
              if (!isset(LISBOA[$idPagina]['tags'])) {
                echo 'No hay tags';
              } else {
                foreach (LISBOA[$idPagina]['tags'] as $key => $value) {
                  echo '#' . $value . ', ';
                }
                }
              ;
              ?>
            </small></p>
          </div>
      </div> <!--fin de row -->
      
      <div class="row">
        <div class="col-md-6  py-5"><!-- cuadro con miniaturas de imagenes-->
          <h3>Navegar por imágenes</h3>
          <div class="row">
            <?php  
              foreach (LISBOA as $key => $articulo) {
                echo '<div class="col-4 p-3"><a href="' . $articulo["enlace"] . '"> <img src="' . $articulo['imgPrincipal'] . '" class="img-fluid"></a></div>';
              }
                ?>
          </div>
        </div>

      
        <div class="col-md-6 py-5"> <!-- MENU DE TODOS LOS ARTÍCULOS-->
                  <h3>Todos los artículos</h3>
            <?php  
            foreach (LISBOA as $key => $articulo) :?>
              <a href="<?php echo $articulo["enlace"] ?>"><?php echo $articulo["titular"] ?></a><br>
            <?php endforeach; ?>
        </div>

      </div><!--fin de row-->

    </div>
  </div>
</main>
<?php require 'footer.php' ?>