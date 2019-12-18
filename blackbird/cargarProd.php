<?php
require_once('../Clases/autoloadClases.php');
$textoBanner = "Nuevo Producto";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cargar Producto Nuevo</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
     <?php require_once('../partials/header.php'); ?>
      <!-- CONTENIDO -->
        <div class="cuerpo">
      <!-- Arranca el main-->
          <main>
            <!-- Campos a llenar -->

            <form class="" action="?producto_id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="producto_id" value="<?=$_GET['id']?>">

              <label for="nombre">Nombre del producto:</label>
              <br>
              <input type="text" name="nombre" value="<?=$nombre?>">
              <br>
                <?= $errores['nombre'] ?? '' ?>
                <br>
                <br>
                <label for="categoria">Categoría:</label>
                <br>
                <select name="categoria">
                  <?php foreach ($categorias as $categoria) : ?>
                    <?php if ($_POST["categoria"] == $categoria) : ?>
                      <option value="<?=$categoria?>" selected>
                        <?=$categoria?>
                      </option>
                    <?php else: ?>
                    <option value="<?=$categoria?>">
                      <?=$categoria?>
                    </option>
                  <?php endif; ?>
                    <<?php endforeach; ?>
                </select>
                <br>
                <?= $errores['categoria'] ?? '' ?>
                <br>
              <label for="precio">Precio:</label>
              <br>
              <input type="number" name="precio" value="<?=$precio?>" >
              <br>
                <?= $errores['precio'] ?? '' ?>
                <br>
              <label for="fotoProd">Imagen:</label>
              <input type="file"  id="fotoProd" name="fotoProd">
              <br>
              <?= $errorArchivo ?>
              <label for="stock">Stock:</label>
              <br>
              <input id="stock" type="number" name="stock" value="<?=$stock?>">
              <br>
              <label for="description">Descripción(máx 200 caracteres):</label>
              <br>
              <input type="text" name="description" value="<?= $description?>" >
              <br>
              <input class="check" type="checkbox" name="oferta" value="1"> Está en oferta.
              <br>
              <label for="descuento">Porcentaje de descuento:</label>
              <br>
              <input id="descuento" type="number" name="descuento" value="<?=$descuento?>">
              <br>
              <label for="descuento">Modelo:</label>
              <br>
              <input id="modelo" type="text" name="modelo" value="<?=$modelo?>">
              <br>
              <br>
              <label for="descuento">Material:</label>
              <br>
              <input id="material" type="text" name="material" value="<?=$material?>">
              <br>
              <br>
              <label for="descuento">Tipo de Piedra:</label>
              <br>
              <input id="tipoPiedra" type="text" name="tipoPiedra" value="<?=$tipoPiedra?>">
              <br>
              <button id="cargarProd" type="submit" name="button">Cargar Producto</button>
        </form>
          </main>
  <!-- Inicio Footer -->
    <?php require('../partials/footer.php') ?>
  </div>
</div>
  </body>
</html>
