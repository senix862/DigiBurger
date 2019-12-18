<?php

class Validador {
    private $bd;

    public function __construct(BaseDatos $bd)
    {
        $this->bd = $bd;
    }

    public function validarLogin($datos): array
    {
        $errores = [];

        $email = trim($email);
        if ($this->validarEmail($email)) {
            $errores['email'] = 'El email es inválido';
        }
        if ($this->validarVacio($password)) {
            $errores['password'] = 'Ingrese la contraseña';
        }
        if (empty($errores)) {
            $usuario = $this->bd->buscarUsuarioEmail($email);
            if ($usuario === null) {
                $errores['email'] = 'Usuario o clave incorrectos';
            } else if (!password_verify($password, $usuario->getPassword())) {
                $errores['password'] = 'Usuario o clave incorrectos';
            }
            if (empty($errores['email']) && empty($errores['password'])) {
                // $usuario = file_get_contents('dataBase/usuarios.json');
                // //lo transformo a variables en php
                // $usuarios = json_decode($usuario, true);

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
        }

        return $errores;
    }
  }
    public function validarRegistro(): array
    {

    }

    /**
     * retorna true cuando el $email no sea valido
    */
    public function validarEmail(string $email): bool
    {
        return !filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
    * retorna true cuando está vacio
    */
    public function validarVacio(string $valor): bool
    {
        return strlen(trim($valor)) === 0;
    }

}
