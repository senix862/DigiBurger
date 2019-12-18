<?php
require_once('funciones/autoload.php');

$email="";
$password="";

$errores=[
  "email" => "",
  "password" => ""
];
if($_POST){
  $email = trim($_POST["email"]);
  $errores = validarLogin($_POST);

  // if (!$errores){
  //   header("location:profile.php");
  // }
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>LOGIN - Blackbird</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('partials/header.php') ?>
      <!-- CONTENIDO -->
    <div class="cuerpo">
    <!-- Arranca el main-->
    <main>
      <!-- Banner -->
      <section class="banner">
        <div class="ban">
          <img src="img/banner.png" alt="BANNER">
          <h1>INGRESAR</h1>
        </div>
      <!-- AQUI DENTRO VA EL CONTENIDO A AGREGAR -->
        <div class="datos">
          <form class="" action="login.php" method="post">
            <label for="email">E-mail:</label>
            <br>
            <input id="email" type="text" name="email" value="<?= $email?>">

            <div class="errores">
              <?= (isset($errores["email"]) ? $errores["email"] : "")?>
            </div>
            <label for="password">Contraseña:</label>
            <br>
            <input id="password" type="password" name="password" value="">
            <div class="errores">
              <?= (isset($errores["password"]) ? $errores["password"] : "")?>
            </div>
            <div class="cookie">
              <input type="checkbox" id="cookie" name="" value="">
              <label for="cookie">Mantenerme Conectado</label>
            </div>
            <a href="#">olvidé mi contraseña</a>
            <br>
            <button type="submit" name="button">Ingresar</button>
          </form>
            <a href="registro.php">Registrarme</a>
        </div>
    </main>
    <!-- Inicio Footer ADENTRO DEL CUERPO -->
      <?php require('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
