<?php include 'contenido.php' ?>
<?php require 'head.php' ?>
 <title>PAGINA</title>
 <meta name="description" content="PRACITCA LOOP FOREACH EN PHP">
<?php //creamos la variable de la página para identificar su contenido
$idPagina = intval($_GET['id']);
?>
</head>
<body>
    
<?php require 'header.php' ?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>PRÁCTICA DE PLANTILLA DE PÁGINA DE CONTENIDOS</h1>
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
            <h2><?php echo LISBOA[$idPagina]['titular']?></h2>
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