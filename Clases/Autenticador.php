
<?php
session_start();

function estaElUsuarioLogeado () {
    if (isset($_SESSION['email'])) {
        return true;
    }
    return false;
  }

class Autenticador {

    public function logear(Usuario $usuario){
        $_SESSION['email'] = $usuario->getEmail();

        if ($usuario !== 0) {
         //si existe lo logeo
            $_SESSION['email'] = $email;
            $_SESSION['avatar'] = $usuario['avatar'];
            $_SESSION['nombre'] = $usuario['nombre'];
        } else {
            destruirRecuerdame();
            //sino lo redirijo a login
            header('location:login.php');
        }
      }

    public function destruirRecuerdame() {
      setcookie('recuerdame', '', time() - 1);
    }

    public function deslogear(Usuario $usuario){
        session_destroy();
        destruirRecuerdame();
    }

    public function guardarCookie(){
      if (isset($_COOKIE['recuerdame'])) {
        logear($_COOKIE['recuerdame']);
     }

    }

// public function logear(Usuario $usuario){
//     $_SESSION['email'] = $usuario->getEmail();
// }

// public function deslogear(Usuario $usuario){
//     session_destroy();
// }
//
// public function guardarCookie(){
//
// }

}
