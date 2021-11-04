<main role="main">
<?php $global = $_SERVER['DOCUMENT_ROOT']; //ESTO DEVUELVE  'LOCALHOST' O SEA LA CARPETA 'HTDOCS'
    $global .= "/lisboa_bd/config/global.php";
    require_once($global) ?>
  <section class="jumbotron text-center">
    <div class="container">
      <h1>ARTICULOS CON EL TAG: #
      <?php echo $idTag; ?>
      </h1>
      
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
      <?php
     
      while ($fila = $resultados->fetch_assoc()) {
         //EL SIGUIENTE WHILE ES PARA CONEXIONES TIPO PDO
         //  while($fila = $resultados->fetch( PDO ::FETCH_ASSOC)){
         echo 
          '<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img src=' . $fila['imgPrincipal'] . ' class="img-fluid">

            <div class="card-body">
              <h2>' . $fila['titular'] . '</h2>
              <small>' . $fila['fecha'] . '</small> <br>
              <p class="card-text">' . $fila['texto'] . '</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="' . $fila['url'] . '"  type="button" class="btn btn-sm btn-outline-secondary" target="_blank">Ver más</a>
                </div>
                <div>
                <small class="text-muted">' . $fila['autor'] . ' </small>
                </div> 
              </div> <br>
                <div class="d-block"><small class="text-muted"> TAGS: ' 
                ;
                  $tagsVacios=0;
                  $i = 1;
  
                  while ($i<=4) {
                    if ($fila["tag$i"]=='') {
                      $i++;
                      $tagsVacios++;

                      continue; //salta a la siguiente iteración si le tag está vacío
                    }
                    echo '<a href ="tags.php?tag=' . $fila
                  ["tag$i"] . '">#' . $fila["tag$i"] .  ' </a>';
                  $i++;
                  }
                  if ($tagsVacios==4){
                    echo 'No hay tags';
                }
                 echo '</small></div>
              
            </div>
          </div>
        </div>'
     ;
      }
      ?>
      </div>
        <!--fin de .row -->
    </div>
  </div>

</main>