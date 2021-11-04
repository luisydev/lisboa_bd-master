<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1>PRACTICA PÁGINA DINAMICA CON BASE DE DATOS</h1>
      <p class="lead text-muted">Esta es la plantilla que usamos para mostrar cada artículo por separado.</p>
      <p>
        <?php if(!$idPagina == 0){
         echo '<a href="pagina.php?id=';
          echo $idPagina -1; 
          echo '"> ARTÍCULO ANTERIOR </a> | ';}//Esto hace que no se muestre nada si es el primer artículo el de esta página, para que no se muestre nada ya que iría a la pagina -1 que no existe
        ?>        
        <a href="pagina.php?id=<?php echo $idPagina;   ?>"> ESTE ARTÍCULO </a>
        <?php if($idPagina == $resultados3->num_rows - 1){
          echo ' | <span class="text-muted"> No hay más artículos</span>';
        } else {
        echo ' | <a href="pagina.php?id=';
        echo $idPagina + 1; 
        echo '"> ARTÍCULO SIGUIENTE </a> </p>';
        }
        ?>      
    </div>
  </section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row"><!-- row del artículo principal-->
        <div class="col-md-6">
          <img src="<?php echo $data1['imgPrincipal'] ?>" alt="Lisboa y sus tranvías" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h2><?php echo $data1['titular'] ?></h2>
          <p><small><?php echo $data1['fecha'] ?></small></p>
          <p><?php echo $data1['texto'] ?></p>
          <p><b><?php echo $data1['autor'] ?></b></p>
          <p><small>Tags de este artículo:<b>
            <?php
              if (!isset($data2['tag1'])) {
                echo 'No hay tags';
              } else {
                $i = 1;
                while ($i<=4) {
                  if ($data2["tag$i"]=='') {
                    $i++;
                    continue; //salta ala siguiente iteración si le tag está vacío
                  }
                  echo '<a href ="tags.php?tag=' . $data2
                ["tag$i"] . '">' . $data2["tag$i"] .  ' </a>';
                $i++;
                }
                }
              ;
            ?>
          </b></small></p>
        </div>        
      </div><!--fin de row-->
      <div class="row">
        <div class="col-md-6  py-5"><!-- cuadro con miniaturas de imagenes-->
          <h3>Navegar por imágenes</h3>
          <div class="row">
            <?php              
              while ($fila = $resultados3->fetch_assoc()) {
                echo '<div class="col-4 p-3"><a href="' . $fila["url"] . '"> <img src="' . $fila['imgPrincipal'] . '" class="img-fluid"></a></div>';
              }
                ?>
          </div>
        </div>
        <div class="col-md-6 py-5"> <!-- MENU DE TODOS LOS ARTÍCULOS-->
                  <h3>Todos los artículos</h3>
            <?php  
           // foreach (LISBOA as $key => $articulo) {
            //  echo '<a href="' . $articulo["url"] . '">' .  $articulo["titular"] . '</a><br>';
            $consulta_sql4 = "SELECT url, titular FROM contenido";
            $resultados4 = $conexion->query($consulta_sql4);
              while ($fila = $resultados4->fetch_assoc()) {
                echo '<a href="' . $fila["url"] . ' "> ' . $fila['titular'] . '</a><br>';
              }           
              ?>
        </div>
      </div><!--fin de row-->
        <!--BOTONES DE ACTUALIZAR Y ELIMINAR ARTICULO-->
        <div class="row">     
        <a href='actualizar_articulo.php?id=<?php echo "$idPagina"?>' class="btn btn-primary col-4 mx-auto text-center"> ACTUALIZAR ARTICULO</a> <br>
        </div> 
        <form class="d-none" method="post" action="eliminar_registro.php">
            <div class="row">
                </div> 
                <div class="form-group d-none">     
                    <input type="text" class="form-control" id="id" value="<?php echo $data1['id']?>" name="id">   
                </div>                  
            </div>
                <div class="row text-center">
                    <div class="col mx-auto">
                        <button type="submit" class="btn btn-danger col-3 mx-auto text-center mt-2">ELIMINAR ARTICULO</button>
                    </div>
                </div>
        </form>       
    </div><!--fin container-->
  </div><!--fin album-->
</main>
