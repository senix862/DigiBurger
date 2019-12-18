<?php $textoBanner="Anillo Rodocrosita" ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/producto.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Anillo Rodocrosita - Joyas y Bijouterie</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('partials/header.php') ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
      <!-- Arranca el main-->
    <main>
      <!-- DETALLES DEL PRODUCTO -->
      <section class="item-container">
          <div class="img-container">
            <img src="img/anillos/anilloRodo-art262.jpg" alt="">
          </div>
          <div class="item-info">
            <h6 class="item-price">$ 1.350</h6>
            <button id="comprar" type="button" name="com">Comprar</button>
          </div>
          <div class="item-info">
            <h5 class="item-name">Anillo Rodocrosita</h5>
          </div>
           <div class="item-description">
             <p class="item-description">Se trata de una piedra semipreciosa, compuesta por carbonato de Manganeso, es este último el que determina ese fuerte color rosado o púrpura, que se va aclarando a medida que en su composición se ve reemplazado el Manganeso (Mn) por otros componentes. Su nombre proviene de dos vocablos griegos, a raiz de su color, rodo - rosa y crosita - color. En Argentina es considerada como piedra nacional, se encuentra en las SIERRAS CAPILLITAS, pertenecientes al Nevado de Aconquija, provincia de Catamarca, Argentina, a 3200 metros de altura sobre el nivel del mar.
 Se la trabaja especialmente para la joyería, aunque tiene su hueco dentro de la decoración y es un mineral muy cotizado en el coleccionismo. Representa el amor desinteresado y la compasión. Es una piedra que imparte una actitud dinámica y positiva, es excelente para el corazón enseñándole a asimilar los sentimientos dolorosos. <b>Es la piedra del amor.</b></p>

           </div>
            <div class="item-optionals">
              <ul>
                <li class="item-optionals-item">
                  <span>Modelo:</span>
                  <strong>Ovalado</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Material:</span>
                  <strong>Plata</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Tipos de piedra:</span>
                  <strong>Rodocrosita</strong>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer -->
      <?php require('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
