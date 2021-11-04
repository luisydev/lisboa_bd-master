<main role="main">
<div class="container">
      <h1>FORMULARIO PARA NUEVA ENTRADA</h1>
      <p class="lead text-muted">Esta es la plantilla que usamos para crear una nueva entrada.</p>
      <p>
      </div>  
  <div class="album py-5 bg-light">
    <div class="container">
        <form method="post" action="agregar_nuevo_articulo.php">
            <div class="row">
                </div> 
                <div class="form-group">
                    <label for="titular"></label>
                    <input type="titular" class="form-control" id="titular" placeholder="El nuevo titular" name="titular">
                </div>
                    <div class="form-group">
                    <label for="fecha"></label>
                    <input type="date" class="form-control" id="fecha" placeholder="fecha" name="fecha">
                    </div>                
                <div class="form-group">
                <label for="articulo">Nuevo artículo</label>
                    <textarea class="form-control" id="artiuclo" placeholder="articulo" name="articulo">
                    </textarea>
                </div>
                <div class="form-group">
                <label for="autor"></label>
                    <input type="autor" class="form-control" id="autor" placeholder="autor" name="autor">
                </div>                
                <div class="form-group">
                <label for="tags"></label>
                    <input type="tags" class="form-control" id="tags" placeholder="Portugal, Lisboa, Vino, etc." name="tags">                       
                </div>
                <div class="form-group">
                    <label for="imagen"></label>
                    <input type="imagen" class="form-control" id="imagen" placeholder="URL imagen" name="imagen">                    
                </div>                
            </div>
                <div class="row text-center mt-5">
                    <div class="col mx-auto">
                        <button type="submit" class="btn btn-primary mb-2">Nueva Entrada</button>
                    </div>
                </div>
        </form> 
    </div>   
 </div>

</main>