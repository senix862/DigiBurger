<?php

require_once('partials/paises.php');
// require_once('Clases/Usuario.php');
require('conexion.php');
require('funciones/ValidarRegistro.php');
require_once('Clases/autoloadClases.php');

if (isset($_COOKIE['recuerdame'])) {
      logear($_COOKIE['recuerdame']);
  }

//FALTA GUARDAR LOS CAMPOS AL INGRESAR UN CAMPO INCORRECTO; Y FALTA VALIDAR EL CHECK;
  $nombre = "";
  $apellido = "";
  $email = "";

  if($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
  }

  if (estaElUsuarioLogeado()) {
    header('location:profile.php');
  }

$errorArchivo = "";
$error = "";
$errores=[
  "email" => "",
  "password" => "",
  "nombre" => "",
  "apellido" => "",
   "paises" => "",

];

if($_POST){
 $terminos = "";
  if(isset($_POST['terminos'])){
    $terminos = $_POST['terminos'];
  }


  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $nacionalidad = $_POST["pais"];
  $password2 = $_POST["password2"];
//Aca creamos el objeto Usuario
  $usuario = new Usuario ($nombre, $apellido, $email, $password, $nacionalidad);
  $validador = new ValidarRegistro();

  $errores=$validador->validarRegistro($_POST,$conex);

  if (empty($error) && empty($errores)) {
    // Acá se sube la imagen
    if ($_FILES["avatar"]["error"]===0) {
      $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
      if ($ext != "png" && $ext != "jpg" && $ext !="jpeg") {
        $errorArchivo= "Formato de archivo inválido";
      } else {
        $usuario["avatar"] = subirAvatar($_FILES['avatar'], $_POST["email"]);
      }
    }
    // Acá guardamos la contraseña
      if ($password === $password2) {
        $usuario->setPass(password_hash($_POST["password"], PASSWORD_DEFAULT));
      }
      //buscar el email repetido
      // $validator = $conex->query("");
      // $cantidad = $validator->rowCount();
      // var_dump($cantidad);exit;
      // if($cantidad==0){
      //     $query = $conex->query("");
      //     $query->execute();


      // } else {
      //     $errorEmail = 'El mail existe';
      //     $invalidError = 'is-invalid';
      // }
    }


function insertarUsuario(PDO $db) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
 $query = $db->prepare("INSERT into usuarios values (null, :nombre, :apellido, null, :email, :pass,null)");
  $query->bindValue(":nombre", $nombre);
  $query->bindValue(":apellido", $apellido);
  $query->bindValue(":email", $email);
  $query->bindValue(":pass",$password);
  $query->execute();
}

if (empty($errores)){


insertarUsuario($conex);
header("location:profile.php");

}
}




$textoBanner="Registro";

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/registro.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO - Blackbird</title>
  </head>
  <body>
      <div class="container">
        <!-- Header -->
        <?php require_once('header.php'); ?>
        <!-- CONTENIDO -->
          <div class="cuerpo">
        <!-- Arranca el main-->
            <main>
              <!-- Campos a llenar -->

              <form class="" action="registro.php" method="post" enctype="multipart/form-data">

                <label for="nombre">Nombre:</label>
                <br>
                <input type="text" name="nombre" value="<?=$nombre?>">
                <br>
                  <?= $errores['nombre'] ?? '' ?>
                  <br>
                <label for="apellido">Apellido:</label>
                <br>
                <input type="text" name="apellido" value="<?=$apellido?>" >
                <br>
                  <?= $errores['apellido'] ?? '' ?>
                  <br>
                <label for="avatar">Subir foto de perfil</label>
                <input type="file"  id="avatar" name="avatar">
                <br>
                <?= $errorArchivo ?>
                <label for="date">Fecha de nacimiento:</label>
                <br>
                <input id="date" type="date" name="date" value="" >
                <br>
                <label for="pais">País:</label>
                <br>
                <select name="pais">
                  <?php foreach ($paises as $pais) : ?>
                    <?php if ($_POST["pais"] == $pais) : ?>
                      <option value="<?=$pais?>" selected>
                        <?=$pais?>
                      </option>
                    <?php else: ?>
                    <option value="<?=$pais?>">
                      <?=$pais?>
                    </option>
                  <?php endif; ?>
                    <<?php endforeach; ?>
                </select>
                <br>
                <?= $errores['paises'] ?? '' ?>
                <br>
                <label for="email">E-mail:</label>
                <br>
                <input type="email" name="email" value="<?= $email?>" >
                <br>
                <?= $errores['email'] ?? '' ?>
                <br>
                <label for="password">Contraseña:</label>
                <br>
                <input id="password" type="password" name="password" value="" >
                <br>
                <?= $errores['password'] ?? '' ?>
                <?=$error?>
                <br>
                <label for="password2">Repetir contraseña:</label>
                <br>
                <input id="password2" type="password" name="password2" value="" >
                <br>
                <br>
                <input class="check" type="checkbox" name="terminos" value="1" > Acepto los <a href="#">Términos y condiciones</a>.
                <br>
                <?= $errores['terminos'] ?? '' ?>
                <br>
                <input class="check" type="checkbox" name="newsletter" value=""> Deseo recibir ofertas por mail.
                <br>
                <button id="registro" type="submit" name="button">Registro</button>
          </form>
            </main>
    <!-- Inicio Footer -->
      <?php require('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
