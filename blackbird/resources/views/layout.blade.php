<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      @yield('css')
    <!-- Menu Rotativo -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../favicon.ico">
    <!-- Fin Menu Rotativo -->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
  </head>
  <body>

      <header id="menu">
      <div class="hamburguesa">
        <i class="fas fa-hamburger">
          <nav class="navigation">
            <ul class="izquierdos navigation-ul">
              <a href="listado"><li>Nuestras Burgers</li></a>
              <a href="faq"><li>Preguntas Frecuentes</li></a>
              <a href="contacto"><li>Contacto</li></a>
            </ul>
            <ul class="derechos navigation-ul">

          @auth
              <a href="lista"><li>Mi Lista</li></a>
              <a href="perfil"><li>Mi Perfil</li></a>
              <a href="addProd"><li>Agregar Producto</li></a>
              <form id="logout-form" action="{{ route('logout') }}" method="post" style="display:none">
                @csrf
              </form>

          @else
              <a href="login"><li>Ingresar</li></a>
              <a href="register"><li>Registrarme</li></a>
          @endauth
            </ul>
          </nav>
      </i>
      </div>

      <div class="logo">
        {{-- <a href="burger"><img src="/img/logo.png" alt="logo">
      </a> --}}
       <a href="burger">
         <p id="marca">
           DIGIBURGER
         </p>
       </a>
      </div>

        {{-- <div class="component">
          <button class="cn-button" id="cn-button">Burger</button>
          <div class="cn-wrapper" id="cn-wrapper">
            <ul>
              <li><a href="burger"><span><i class="fas fa-home"></i></span></a></li>
              <li><a href="/productos"><span><i class="fas fa-hamburger"></i></span></a></li>
              <li><a href="/faq"><span><i class="fas fa-question"></i></span></a></li>
              <li><a href="#"><i class="fas fa-user-alt"></i></i></a></li>
              <li><a href="/lista"><span><i class="fas fa-heart"></i></span></a></li>
              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">"><i class="fas fa-sign-out-alt"></i></a></li>
             </ul>
          </div> --}}
          <!-- End of Nav Structure -->
        </div>
      <!-- barra de busqueda
      {{-- <div class="active-purple-3 active-purple-4 mb-4">
      <input id="search"class="form-control" type="text" placeholder="Search" aria-label="Search">
      </div> --}}
      <div class="lupa">
       <a href="productos.php"><i class="fas fa-search"></i></a>
      </div>
      <div class="carrito">
        <a href="carrito.php"><i class="fas fa-shopping-basket"></i></a>
      </div>
      </header>
      {{-- <div class="banner">
        <img src="/img/banner.png" alt="BANNER">

      </div> --}}

      <div class="menuHor">
        <ul>
          <ul class="izquierdos navigation-ul">
            <a href="/productos"><li>Nuestras Burgers</li></a>
            <a href="/faq"><li>Preguntas Frecuentes</li></a>
            <a href="/contacto"><li>Contacto</li></a>
          </ul>
          <ul class="derechos navigation-ul">
            <a href="/search"><li>Buscar</li></a>
        @auth
            <a href="/lista"><li>Mi Lista</li></a>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <li>{{ __('Logout') }}</li></a>
        @else
            <a href="/login"><li>Ingresar</li></a>
            <a href="/register"><li>Registrarme</li></a>
        @endauth
          </ul>
        </ul>
      </div>
      -->
      @yield('main')

      <footer>
        <section class="newsletter-redesSociales">
          <!-- Redes Sociales -->
            <h5>¡Síganos en nuestras redes sociales!</h5>
            <div class="redesSociales">
              <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
              <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <!-- Newsletter -->
            <h5>Suscribirme para conocer mas novedades:</h5>
            <div class="footer-Sociales">
              <input id="E-MAIL" type="email" name="E-MAIL" value=""  placeholder="example@example.com" required>
              <button id="subs" type="submit" name="button">
                  Suscribirse
              </button>
            </div>
        </section>
        <div class="cierre">
            <a href="contacto.php">CONTACTO</a>
            <a href="faq.php">PREGUNTAS FRECUENTES</a>
        </div>

      </footer>
      <a id="volver" href="#"><i class="fas fa-arrow-circle-up"></i></a>

      <script src="/js/polyfills.js"></script>
      <script src="/js/demo2.js"></script>
