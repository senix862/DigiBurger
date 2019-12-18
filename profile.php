<?php
require_once('Clases/autoloadClases.php');

if (isset($_COOKIE['recuerdame'])) {
    logear($_COOKIE['recuerdame']);
}

if (!estaElUsuarioLogeado()) {
  header('location:login.php');
}

 $textoBanner="Mi Perfil";

 $usuario = file_get_contents('dataBase/usuarios.json');
 //lo transformo a variables en php
 $usuarios = json_decode($usuario, true);


?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/profile.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Perfil - Blackbird</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('header.php') ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
      <!-- Arranca el main-->
      <main>
        </section>
        <section class="main-profile">
            <div class="img-background">
              <!-- <img src="https://rotary6690.org/wp-content/plugins/dacdbplus/img/no_image.jpg"> -->
              <!-- <i id="pencil" class="fas fa-pencil-alt"></i> -->
              <img src="<?=$_SESSION['avatar']?>">
            </div>
            <br>
            <h5>Email: <?=$_SESSION['email']?></h5>
            <br>
            <button class="editar" type="submit" name="button">Editar Perfil</button>
        </section
      </main>
      <!-- Footer -->
        <?php require('partials/footer.php') ?>
      </div>
    </div>
  </body>
</html>
