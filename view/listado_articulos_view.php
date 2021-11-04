<main role="main">
<div class="container">
      <h1>LISTADO DE LOS ARTICULOS</h1>
      <p class="lead text-muted">Aquí mostramos todos los artículos disponibles a modo de backend</p>
      
        <!--<a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>-->
      </p>
</div>
<div class="container">
<div class="row mb-4 py-4 text-center text-dark bg-light">
    <div class="col-4"><b>TITULAR</b></div>
    <div class="col-2"><b>FECHA</b></div>
    
    <div class="col-2"><b>ACTUALIZAR</b></div>
    <div class="col-2"><b>DUPLICAR</b></div>
    <div class="col-2"><b>BORRAR</b></div>
</div>
<?php

while ($fila = $resultados->fetch_assoc()) {
    
    echo '<div class="row text-center">
    <div class="col-4 bg-light"><b><a href="' . $fila["url"] . ' "> ' . $fila['titular'] . '</a></b></div>
    <div class="col-2"><a href="' . $fila["url"] . ' "> ' . $fila['fecha'] . '</a></div>
    
    <div class="col-2 "><a href="actualizar_articulo.php?id=' . $fila['id'] . '" class="btn btn-sm btn-info">ACTUALIZAR</a></div>
    <div class="col-2 text-center">
          <form method="post" action="duplicar_registro.php" class="d-inline">
            <div class="form-group d-none">
              <input type="text" class="form-control" value="' . $fila['id'] . '"  id="id" name="id">
            </div>
        <button type="submit" class="btn btn-sm btn-warning">DUPLICAR</button>
          </form>
      </div>
      <div class="col-2 text-center">
      <form method="post" action="eliminar_registro.php" class="d-inline">
        <div class="form-group d-none">
          <input type="text" class="form-control" value="' . $fila['id'] . '"  id="id" name="id">
        </div>
      <button type="submit" class="btn btn-sm btn-danger">BORRAR</button>
    </form>
    </div>
    </div>';  
  }

?>
</main>