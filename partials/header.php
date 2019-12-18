<?php
  require_once('../Clases/autoloadClases.php');
  $secciones = [
    "Home" => "index.php",
    "Preguntas Frecuentes" => "faq.php",
    "Contacto" => "contacto.php",
  ];
  if (estaElUsuarioLogeado() == false) {
    $secciones["Registrarse"] = "registro.php";
    $secciones["Ingresar"] = "login.php";
  } elseif (estaElUsuarioLogeado() == true ) {
    $secciones["Mi Perfil"] = "profile.php";
    $secciones["Salir"] = "logout.php";
  }
 ?>

  <link rel="stylesheet" href="css/header.css">

<header>
  <div class="hamburguesa">
    <i class="fas fa-bars"><nav>
      <ul>
        <?php
        foreach ($secciones as $seccion => $url) :?>
          <li><a href="<?=$url?>"><?=$seccion?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </i>
  </div>

  <div class="logo">
    <a href="index.php"><img src="img/logo.png" alt="logo">
 </a>
   <a href="index.php">
     <p id="marca">
       BLACKBIRD
     </p>
   </a>
  </div>


  <!-- barra de busqueda -->
  <div class="active-purple-3 active-purple-4 mb-4">
  <input id="search"class="form-control" type="text" placeholder="Search" aria-label="Search">
  </div>
  <div class="lupa">
   <a href="productos.php"><i class="fas fa-search"></i></a>
 </div>
 <div class="carrito">
    <a href="carrito.php"><i class="fas fa-shopping-basket"></i></a>
  </div>


</header>
<div class="banner">
    <img src="img/banner.png" alt="BANNER">
    <h1><?php echo $textoBanner ?></h1>
</div>

<div class="menuHor">
    <ul>
      <?php
      foreach ($secciones as $seccion => $url) :?>
        <li>
          <a href="<?=$url?>"><?=$seccion?></a>
        </li>
      <?php endforeach; ?>
    </ul>
</div>
