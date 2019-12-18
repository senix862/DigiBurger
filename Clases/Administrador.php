<?php

require_once('../funciones/autoload.php');

class Administrador extends Usuario {

  public function setEmail ($var = 'admin@blackbird.com'){
    $this->email = $var;
}
  public function setPass ($var = 'blackbirdelmejor'){
    $this->password = $var;
  }
  public function cargarProducto(Producto $producto){
    //En esta funcion se guarda en el JSON el new Producto.
  }
  public function eliminarProducto(Producto $producto){
    //Aca supuestamente borramos del JSON el Producto.
  }
  public function modificarProducto(Producto $producto){
    //Desde la pagina producto.php, nos lleva a cargarProd.php y muestra el JSON.
  }
  public function modificarDestacados(Producto $producto){

  }
  public function modificarFaq(Faq $faq){
 //Lo mismo que en cargarProd.
  }
}
