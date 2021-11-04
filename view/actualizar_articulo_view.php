<main role="main">

<div class="container">
      <h2>ACTUALIZA TU ARTICULO</h2>
      <p class="lead text-muted">Esta es la plantilla que usamos para crear actualizar un artículo.</p>
      <p>
      </div>
  
  <div class="album py-5 bg-light">
    <div class="container">
       
    
        <form method="post" action="modificar_registro.php">
            <div class="row">
                </div> 
                <div class="form-group d-none">
                    
                    <input type="text" class="form-control" id="id" value="<?php echo $data1['id']?>" name="id">
                    
                </div>
                <div class="form-group">
                    <label for="titular">Titular</label>
                    <input type="titular" class="form-control" id="titular" value="<?php echo $data1['titular']?>" name="titular">
                    
                </div>
                
                <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="date" class="form-control" id="fecha" value="<?php echo $data1['fecha']?>" name="fecha">
                </div>
                
                
                <div class="form-group">
                    <label for="articulo">Artículo</label>
                    <textarea class="form-control" cols="20" rows="6" id="articulo" value="/*al ser un textarea, lo que ponemos en value en el resto, lo tenemos que poner dentro de las etiquetas de textarea*/" name="articulo"><?php echo $data1['texto']?>
                    </textarea>
                </div>
                 
                <div class="form-group">
                <label for="autor">Autor</label>
                    <input type="text" class="form-control" id="autor" value="<?php echo $data1['autor']?>" name="autor">
                    
                </div>
                
                <div class="form-group">
                    <label for="tag1">Tag1</label>
                    <input type="text" class="form-control" id="tag1" placeholder="insertar tag" value="<?php echo $data2['tag1']?>" name="tag1">      
                </div>
                <div class="form-group">
                    <label for="tag2">Tag2</label>
                    <input type="text" class="form-control" id="tag2" placeholder="insertar tag" value="<?php echo $data2['tag2']?>" name="tag2">      
                </div>
                <div class="form-group">
                    <label for="tag3">Tag3</label>
                    <input type="text" class="form-control" id="tag3" placeholder="insertar tag" value="<?php echo $data2['tag3']?>" name="tag3">      
                </div>
                <div class="form-group">
                    <label for="tag4">Tag4</label>
                    <input type="text" class="form-control" id="tag4" placeholder="insertar tag" value="<?php echo $data2['tag4']?>" name="tag4">      
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="imagen" class="form-control" id="imagen" value="<?php echo $data1['imgPrincipal']?>" name="imagen">   
                </div>
                
            </div>
                <div class="row text-center mt-5">
                    <div class="col mx-auto">
                        <button type="submit" class="btn btn-lg btn-success mb-2">ACTUALIZAR ARTICULO</button>
                    </div>
                    
                </div>
        </form> 
        <form class="d-none" method="post" action="eliminar_registro.php">
            <div class="row">
                </div> 
                <div class="form-group d-none">     
                    <input type="text" class="form-control" id="id" value="<?php echo $data1['id']?>" name="id">   
                </div>                  
            </div>
                <div class="row text-center mt-5">
                    <div class="col mx-auto">
                        <button type="submit" class="btn btn-lg btn-danger mb-2">ELIMINAR ARTICULO</button>
                    </div>
                </div>
        </form> 
    </div>   
 </div>

</main>