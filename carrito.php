<?php
$textoBanner="Mi Carrito";
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/carrito.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>CARRITO - Blackbird</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('partials/header.php') ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
      <!-- Arranca el main-->
      <main>
          <p id="prod">Mis Productos</p>
          <div class="tabla">
      <table>
          <tr>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio</th>
          </tr>
          <tr>
            <td>Anillo Amatista</td>
            <td><button class="masmenos" type="submit" name="masmenos">-</button>
            <li>3</li><button class="masmenos" type="submit" name="masmenos">+</button></td>
            <td>500</td>
          </tr>
          <tr>
            <td>Dije piedra Luna</td>
            <td><button class="masmenos" type="submit" name="masmenos">-</button>
            <li>2</li><button class="masmenos" type="submit" name="masmenos">+</button></td>
            <td>940</td>
          </tr>
          <tr>
            <td>Aros Cuarzo</td>
            <td><button class="masmenos" type="submit" name="masmenos">-</button>
            <li>2</li><button class="masmenos" type="submit" name="masmenos">+</button></td>
            <td>420</td>
          </tr>
          <tr>
            <td>TOTAL</td>
            <td>7</td>
            <td>1860</td>
          </tr>
        </table>
        </div>
        <button class="comprar" type="submit" name="button">Comprar</button>
      </main>
      <!-- Inicio Footer -->
        <?php require('partials/footer.php') ?>
      </div>
    </div>
  </body>
</html>
