<?php
class Pedido {
  private $id;
  private $fechaCreacion;
  private $fechaEnvio;
  private $usuario;
  private $estado;

  public function __construct($id, $fechaCreacion, $fechaEnvio, $usuario, $pais)
  {
    $this->id = $id;
    $this->fechaCreacion = $fechaCreacion;
    $this->fechaEnvio = $fechaEnvio;
    $this->usuario = $usuario;
    $this->estado = $estado;
  }
  public function setId($id){
    $this->id = $id;
  }
  public function getId(){
    return $this->id;
  }
  public function setFechaCreacion($fechaCreacion){
    $this->fechaCreacion = $fechaCreacion;
  }
  public function getFechaCreacion(){
    return $this->fechaCreacion;
  }
  public function setFechaEnvio($fechaEnvio){
    $this->fechaEnvio = $fechaEnvio;
  }
  public function getFechaEnvio(){
    return $this->fechaEnvio;
  }
  public function setUsuario($usuario){
    $this->usuario = $usuario;
  }
  public function getUsuario(){
    return $this->usuario;
  }
  public function setEstado($estado){
    $this->estado = $estado;
  }
  public function getEstado(){
    return $this->estado;
  }
}
