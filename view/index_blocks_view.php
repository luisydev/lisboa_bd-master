<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>PRACTICA INDEX CON BASE DE DATOS</h1>
      <!--<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>-->
      <a href="listado_articulos.php" target="_blank" class="btn btn-primary text-white my-2">Listado Artículos</a>
        <a href="nuevo_articulo.php" target="_blank" class="btn btn-secondary text-white my-2">Nuevo Artículo</a>

      </p>
    </div>
  </section>

  <div class=" py-5 bg-light">

    <div class="container">
    <div class="container">
    <div class="row mb-3">
      <div class="col-1">
        <div class="row">
          <div class="col">
          <a href="index.php?d=block" ><img src="img/btn/block.png" alt=""class=" img-fluid"></a>
          </div>
          <div class="col">
          <a href="index.php?d=grid"><img src="img/btn/grid.png" alt=""class=" img-fluid"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
        <?php
          while ($fila = $resultados->fetch_assoc()) {
           // echo $articulo['titular'] . '<br>'; // esto ha sido para comprobar que funciona la llamada a contenido.php y el foreach
           echo 
           '<div class="row  mb-5 pb-5 shadow-sm">
              <div class="col-md-4">
                <img src="' . $fila['imgPrincipal'] . '" class="img-fluid">
              </div>
              <div class="col-md-8">
                  <h2>' . $fila['titular'] . '</h2>
                  <small>' . $fila['fecha'] . '</small><br>
                  <p class="card-text">' . $fila['texto'] . '</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="' . $fila['url'] . '" type="button" class="btn btn-sm btn-outline-secondary">Ver Más</a>
                    </div>
                    <small class="text-muted">' . $fila['autor'] . '</small>
               <small class="text-muted">TAGS: ' ;            
                   $tagsVacios=0;
                    $i=1;
                    while ($i<=4) {
                      if ($fila["tag$i"]=='') {
                        $i++;
                      $tagsVacios++;
                        continue;//salta a la siguiente iteración si el tag está vacio
                      }
                      echo '<a href="tags.php?tag=' . $fila["tag$i"]  . '">#' . $fila["tag$i"] . ' </a>';
                      $i++;
                    }
                    if ($tagsVacios==4) {
                      echo 'No hay tags';
                    }                 
                  //}
                  ;
                 echo '</small>
                  </div>
                  </div>
                  <br>            
           </div>';
          }//cierre while principal
        ?>   
   </div>
  </div>
</main>
