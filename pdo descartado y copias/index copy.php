<?php include 'contenido.php' ?>
<?php require 'head.php' ?>
 <title>PRACITCA LOOP FOREACH EN PHP</title>
 <meta name="description" content="PRACITCA LOOP FOREACH EN PHP">

</head>
<body>
    
<?php require 'header.php' ?>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>PRACITCA LOOP FOREACH EN PHP</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
      <?php
        foreach (LISBOA as $articulo) {
          //echo $articulo['titular'] . '<br>'; esto ha sido para comprobar que funcina la llamada a contenido.php y el foreach
          echo
          '<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
           <img src="img/lisboa__00' . $articulo['id'] . '.jpg" class="img-fluid">

            <div class="card-body">
              <h2>' . $articulo['titular'] . '</h2>
              <small>' . $articulo['fecha'] . '</small> <br>
              <p class="card-text">' . $articulo['texto'] . '</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="' . $articulo['enlace'] . '"  type="button" class="btn btn-sm btn-outline-secondary" target="_blank">Ver más</a>
                </div>
                <div>
                <small class="text-muted">' . $articulo['autor'] . ' </small>
                </div> 
              </div> <br>
                <div class="d-block"><small class="text-muted"> TAGS:' ;
                foreach ($articulo ['tags'] as $key => $value) {
                  echo '#' . $value .', ';
                }
                ;
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


<?php require 'footer.php' ?>