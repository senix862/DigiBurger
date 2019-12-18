<?php

  class Producto
{
  private $id;
  private $nombre;
  private $precio;
  private $descuento;
  private $especificaciones;
  private $stock;
  private $categoria;

  public function __construct($id, $nombre, $precio, $especificaciones, $stock, $categoria)
  {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->especificaciones = $especificaciones;
    $this->stock = $stock;
    $this->categoria = $categoria;
  }
  public function setId($id){
    $this->id = $id;
  }
  public function getId(){
    return $this->id;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setPrecio(float $precio){
    $this->precio = $precio;
  }
  public function getPrecio(){
    return $this->precio;
  }
  public function setEspecificaciones($especificaciones){
    $this->especificaciones = $especificaciones;
  }
  public function getEspecificaciones(){
    return $this->especificaciones;
  }
  public function setStock(int $stock){
    $this->stock = $stock;
  }
  public function getStock(){
    return $this->stock;
  }
  public function setCategoria($categoria){
    $this->categoria = $categoria;
  }
  public function getCategoria(){
    return $this->categoria;
  }


<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link rel="stylesheet" href="css/producto.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>Anillo Rodocrosita - Joyas y Bijouterie</title>
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
          <h1>Anillo Rodocrosita</h1>
        </div>
      </section>
      <!-- DETALLES DEL PRODUCTO -->
      <section class="item-container">
        <div class="item">
          <div class="img-container">
            <img src="img/anillos/anilloRodo-art262.jpg" alt="">
          </div>
          <div class="item-info">
            <button type="button" name="com">Comprar</button>
            <h6 class="item-price">$ 1.350</h6>
          </div>
          <div class="item-info">
            <h5 class="item-name">Anillo Rodocrosita</h5>
            <p class="item-description">Se trata de una piedra semipreciosa, compuesta por carbonato de Manganeso, es este último el que determina ese fuerte color rosado o púrpura, que se va aclarando a medida que en su composición se ve reemplazado el Manganeso (Mn) por otros componentes. Su nombre proviene de dos vocablos griegos, a raiz de su color, rodo - rosa y crosita - color. En Argentina es considerada como piedra nacional, se encuentra en las SIERRAS CAPILLITAS, pertenecientes al Nevado de Aconquija, provincia de Catamarca, Argentina, a 3200 metros de altura sobre el nivel del mar.
Se la trabaja especialmente para la joyería, aunque tiene su hueco dentro de la decoración y es un mineral muy cotizado en el coleccionismo. Representa el amor desinteresado y la compasión. Es una piedra que imparte una actitud dinámica y positiva, es excelente para el corazón enseñándole a asimilar los sentimientos dolorosos. <b>Es la piedra del amor.</b></p>
            <div class="item-optionals">
              <ul>
                <li class="item-optionals-item">
                  <span>Fabricante:</span>
                  <strong>Annello</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Marca:</span>
                  <strong>Annello</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Modelo:</span>
                  <strong>Ovalado</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Material:</span>
                  <strong>Plata</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Tipo de anillo:</span>
                  <strong>con piedras</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Tipos de piedra:</span>
                  <strong>Rodocrosita</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Pureza de metal:</span>
                  <strong>925</strong>
                </li>
                <li class="item-optionals-item">
                  <span>Estilos:</span>
                  <strong>Ovalado</strong>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer -->
      <?php require('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
