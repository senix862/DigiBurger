<?php
class ValidarRegistro {

public function validarRegistro($datos,$db) {
    $errores = [];

    $email = trim($datos["email"]);
    $password = $datos["password"];
    $password2 = $datos["password2"];
    $nombre = $datos["nombre"];
    $apellido = $datos["apellido"];
    $nacionalidad = $datos["pais"];
    $terminos = $datos["terminos"];

    if (strlen($email) === 0) {
        $errores['email'] = 'Escriba su email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'El e-mail no es válido';
    }

    //Ahora validamos @email

$query = $db->prepare('SELECT * from usuarios');
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach($usuarios as $usuario){
      if($email == $usuario['email']){
        $errores['email'] = 'El email ya esta registrado';
      }
    }

    if (strlen($password) === 0) {
          $errores['password'] = 'Ingrese su contraseña';
        }
    if (strlen($password) < 8) {
        $errores['password'] = 'La contraseña es muy corta (minimo 8 caracteres)';
      } else if ($password != $password2) {
        $errores['password'] = "Las contraseñas no coinciden";
      }
    if (strlen($nombre) === 0) {
        $errores['nombre'] = 'Ingrese su nombre';
      }
      if (strlen($apellido) === 0) {
          $errores['apellido'] = 'Ingrese su apellido';
        }
        if (!$nacionalidad) {
            $errores['paises'] = 'Seleccione un país';
          }
          if(($terminos)!=1){
            $errores['terminos'] = 'Debe aceptar los términos y condiciones';
          }
    return $errores;
}
}
