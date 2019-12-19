<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      @yield('css')
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/css/menuNav/normalizeh.css" />
      <link rel="stylesheet" type="text/css" href="/css/menuNav/componenth.css" />
    <!-- Menu Rotativo -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="../favicon.ico">
    <!-- Fin Menu Rotativo -->
    {{-- <link rel="stylesheet" href="/css/header.css"> --}}
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/partials/footer.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
      <title>@yield('title')</title>
  </head>
  <body>
{{-- Menu Nuevo con Js --}}
<header>
<div class="encabezado">
  <section class="color-1">
    <div class="logo">
      <a href="/burger" class="marca">
        <h3 id="marca">
          DIGIBURGER
        </h3>
      </a>
    </div>
    <div class="burger-icon">
      {{-- <i class="fas fa-hamburger"> --}}
    </div>

    <nav class="cl-effect-14">
      {{-- <a href="burger"><img src="/img/logo.png" alt="logo">
    </a> --}}
      <a href="/productos"><li>Nuestras Burgers</li></a>
      <a href="/faq"><li>Preguntas</li></a>
      <a href="/contacto"><li>Contacto</li></a>
      @auth
          <a href="/carrito"><li>Carrito</li></a>
          <a href="/perfil"><li>Mi Perfil</li></a>
          <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><li>Logout</li></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="dislpay:none">
              @csrf
          </form>
          @if(Auth::user()->is_admin)
          <a href="/products/nuevo"><li>Agregar Producto</li></a>
          @endif
      @else
          <a href="login"><li>Ingresar</li></a>
          <a href="register"><li>Registrarme</li></a>
      @endauth
    </nav>
  </section>
</div>
</header><!-- /encabezado -->
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
      <div class="container">
          @yield('main')
      </div>


      <footer>

        <div class="cierre">
          <div class="ancla">
            <a href="/contacto">CONTACTO</a>
            <a href="/faq">PREGUNTAS FRECUENTES</a>
          </div>
          <div class="redes">
              <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
              <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>

        </div>

      </footer>
      <a id="volver" href="#"><i class="
      fas fa-arrow-circle-up"></i></a>

      		<script src="/js/header.js"></script>
      <script src="/js/polyfills.js"></script>
      <script src="/js/demo2.js"></script>
