<?php
  require_once('funciones/autoload.php');
  if (!estaElUsuarioLogeado()) {
    header('location:index.php');
  }
  $usuario = $_SESSION['nombre'];

  $textoBanner = "Bienvenidx " . $usuario;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/welcome.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Bienvenida</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('partials/header.php') ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
        <a href="profile.php"><button class="welcome" type="submit" name="button">Ir a Mi Perfil</button></a>
        <a href="index.php"><button class="welcome" type="submit" name="button">Ir al Inicio</button></a>
        <a href="productos.php"><button class="welcome" type="submit" name="button">Ver Productos</button></a>
      <!-- Footer -->
        <?php require_once('partials/footer.php') ?>
      </div>
    </div>
  </body>
</html>
