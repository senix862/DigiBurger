<?php

class Usuario {
  private $nombre;
  private $apellido;
  private $email;
  private $password;
  private $nacionalidad;
  private $avatar;
  private $cumpleaños;
  private $suscripcion;



  public function __construct(string $nombre, string $apellido, string $email, string $password, string $nacionalidad)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->password = $this->hashPassword($password);
    $this->nacionalidad = $nacionalidad;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(): string{
    return $this->nombre;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
  }
  public function getApellido(): string{
    return $this->apellido;
  }
  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(): string{
    return $this->email;
  }
  public function setPass($password){
    $this->password = $password;
  }
  public function getPass(): string{
    return $this->password;
  }
  public function setNacionalidad($nacionalidad){
    $this->nacionalidad = $nacionalidad;
  }
  public function getNacionalidad(){
    return $this->nacionalidad;
  }
  public function setAvatar($avatar){
    $this->avatar = $avatar;
  }
  public function getAvatar(): string{
    return $avatar->avatar;
  }
  public function setCumple($cumpleaños){
    $this->cumpleaños = $cumpleaños;
  }
  public function getCumpleaños(){
    return $this->cumpleaños;
  }
  public function setSuscripcion($suscripcion){
    $this->suscripcion = $suscripcion;
  }
  public function getSuscripcion(): bool{
    return $this->suscripcion;
  }

  protected function hashPassword(string $password)
  {
      return password_hash($password, PASSWORD_DEFAULT);
  }
  public function suscribirUsuario(Usuario $usuario){

  }
  public function buscarProducto(Producto $producto){

  }
  public function keepConect(Usuario $usuario) {
    return ;
  }


  // public function enviarMensaje(string){
  //
  // }
  // public function agregarAlCarrito(Producto){
  //
  // }
  // public function quitarDelCarrito(Producto){
  //
  // }
  // public function agregarAfavoritos(Producto){
  //
  // }
  // public function quitarDefavoritos(Producto){
  //
  // }
}
