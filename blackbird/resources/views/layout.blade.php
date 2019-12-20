<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      @yield('css')
        <link rel="stylesheet" type="text/css" href="/css/style4.css">
        <link rel="stylesheet" type="text/css" href="/css/demo.css">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="/css/menuNav/normalizeh.css" />
      <link rel="stylesheet" type="text/css" href="/css/menuNav/componenth.css" />

    {{-- <link rel="stylesheet" href="/css/header.css"> --}}
      <link rel="stylesheet" href="/css/style.css">
      <link rel="stylesheet" href="/css/partials/footer.css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
      <script src="/js/smooth-scroll.min.js"></script>
      <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
      <script src"/js/navegacion/nav.js">

      </script>

      <title>@yield('title')</title>
  </head>
{{-- Menu Nuevo con Js --}}
<header>
<div id="encabezado" class="encabezado">
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
<div class="menu-mobile">
  <div class="menu_bar">
			<a href="#" class="bt-menu"><span><i class="fas fa-hamburger"></i></span>  DIGIBURGER</a>
  </div>

		<nav clas="mobile">
			<ul>
				  <li><a href="/productos">Nuestras Burgers</a></li>
            <li><a href="/faq">Preguntas</a></li>
            <li><a href="/contacto">Contacto</a></li>
            @auth
              <li>  <a href="/carrito">Carrito</a></li>
                <li><a href="/perfil">Mi Perfil</a></li>
                <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="dislpay:none">
                    @csrf
                </form>
                @if(Auth::user()->is_admin)
                <li><a href="/products/nuevo">Agregar Producto</a></li>
                @endif
            @else
                <li><a href="login">Ingresar</a></li>
                <li><a href="register">Registrarme</a></li>
            @endauth
			</ul>
		</nav>
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
</header><!-- /encabezado -->
          @yield('main')
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
        <div id="powered">
          Powered by: @ACN 2019
        </div>
      </footer>
      <a data-scroll id="volver" href="#"><i class="
      fas fa-arrow-circle-up"></i></a>
      <script src="https://ajax.googleapis.com/ajax/libs/dojo/1.13.0/dojo/dojo.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/d3js/5.14.2/d3.min.js"></script>
      <script>
	var scroll = new SmoothScroll('a[href*="#"]',{speed: 1200});
</script>
      		<script src="/js/header.js"></script>
          <script src="/js/navMobile.js"></script>
      <script src="/js/polyfills.js"></script>
      <script src="/js/demo2.js"></script>
