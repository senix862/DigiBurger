<?php
  $textoBanner="Novedades";

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Blackbird - Joyas y Bijouterie</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('header.php') ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
      <!-- Arranca el main-->
      <main>
        <!-- Productos por categorías -->
        <section class="productos">
          <article class="aros">
    				<div class="photo-container">
    					<img class="foto" src="img/aros/arosZafiroAzul-art376.jpg" alt="art376">
              <a class="ver-categoria" href="productos.php#verAros">Aros</a>
    				</div>
          </article>
          <article class="dijes">
    				<div class="photo-container">
    					<img class="foto" src="img/dijes/rodoRedonda-art59.jpg" alt="art59">
              <a class="ver-categoria" href="productos.php#verDijes">Dijes</a>
    				</div>
          </article>
          <article class="pulseras">
            <div class="photo-container">
              <img class="foto" src="img/pulseras/pulsEsmeralda-art522.jpg" alt="art522">
              <a class="ver-categoria" href="productos.php#verPulseras">Pulseras</a>
            </div>
          </article>
          <article class="anillos">
            <div class="photo-container">
              <img class="foto" src="img/anillos/anilloAmatista-art255.jpg" alt="art255">
              <a class="ver-categoria" href="productos.php#verAnillos">Anillos</a>
            </div>
          </article>
          <article class="aros">
    				<div class="photo-container">
    					<img class="foto" src="img/aros/arosZafiroAzul-art376.jpg" alt="art376">
              <a class="ver-categoria" href="productos.php#verAros">Aros</a>
    				</div>
          </article>
          <article class="dijes">
    				<div class="photo-container">
    					<img class="foto" src="img/dijes/rodoRedonda-art59.jpg" alt="art59">
              <a class="ver-categoria" href="productos.php#verDijes">Dijes</a>
    				</div>
          </article>
        </section>
      </main>
      <!-- Footer -->
        <?php require_once('partials/footer.php') ?>
      </div>
    </div>
  </body>
</html>
