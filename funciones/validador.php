<?php

function validarLogin($datos) {
    $errores = [];

    $email = trim($datos['email']);
    $password = $datos['password'];

    if (strlen($email) === 0) {
        $errores['email'] = 'Escriba su email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'El e-mail no es válido';
    }
    if (strlen($password) === 0) {
          $errores['password'] = 'Ingrese su contraseña';
        }
    if (empty($errores['email']) && empty($errores['password'])) {
        $usuario = file_get_contents('dataBase/usuarios.json');
        //lo transformo a variables en php
        $usuarios = json_decode($usuario, true);

        foreach ($usuarios as $usuario) {
          if ($usuario["email"] == $email && password_verify($password, $usuario["password"])) {
            //aqui encontré al usuario y lo logueo
            $_SESSION["email"] = $email;
            $_SESSION["avatar"] = "dataBase/avatarIMG/" . $usuario["avatar"];
            $_SESSION["nombre"] = $usuario["nombre"];
            //pregunto si envie el mantenerme logeado
            if(isset($_POST['mantenerme'])) {
              //creo una cookie que va a durar 30 dias
              setcookie('email', $email, time() + 60*60*24*30);
            }
            header('location:welcome.php');
          }
        }
        //deberia de buscar al usuario en la base de datos
        //y si no esta lanzar un error
        $errores['email'] = "Usuario o clave incorrectos";
      }
    return $errores;
}
