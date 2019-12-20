@section('css')

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/common.css">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/videohome.css">
  <link rel="stylesheet" href="/css/fontawesome/css/all.css">
@endsection
    <meta name="viewport" content="width=device-width,initial-scale-1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  @section('title')
    DigiBurger
  @endsection

<body onload="preCarga()">
  @section('main')
  @extends('layout')
  <div id="loading">

  </div>


<section class="video">
  <a data-scroll id="ahome" href="#home"><div class="fullscreen-video">
    <video autoplay muted>
      <source src="/img/burger1912.mp4" type="video/mp4">
    </video>
  </div></a>
</section>
<section class="imagenMobile">
  <a data-scroll id="ahome" href="#home"><div class="">

  </div></a>
</section>
<section id="home">
  <a data-scroll href="#circulos">
  <div class="foto-back">
    <div class="text">
    <h1 id="digi">DIGIBURGER</h1>
    <h2>LAS MEJORES HAMBURGUESAS DE BUENOS AIRES</h2>
    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</a>
</section>
<div  id="circulos"></div>
<section style="margin-top:160px;">
  <h2 id="ver-mas">NUESTRAS BURGERS</h2>

    <section class="main">

      <ul class="ch-grid">
        <li>
          <div class="ch-item ch-img-1">
            <div class="ch-info-wrap">
              <div class="ch-info">
                <div class="ch-info-front ch-img-1"></div>
                <div class="ch-info-back">
                  <h3><a href="/productos">LAS CLÁSICAS</a></h3>
                  <p>by Digiburger</p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="ch-item ch-img-2">
            <div class="ch-info-wrap">
              <div class="ch-info">
                <div class="ch-info-front ch-img-2"></div>
                <div class="ch-info-back">
                  <h3><a href="/productos">LAS DE AUTOR</a></h3>
                  <p>by Digiburger</p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="ch-item ch-img-3">
            <div class="ch-info-wrap">
              <div class="ch-info">
                <div class="ch-info-front ch-img-3"></div>
                <div class="ch-info-back">
                  <h3><a href="/productos">LAS VEGANAS</a></h3>
                  <p>by Digiburger</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
    </section>
<script>
  var preloader = document.getElementById('loading');
  function preCarga(){
    preloader.style.display = 'none';
  }
</script>
<script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/jquery.dlmenu.js"></script>
<script src="/js/pagetransitions.js"></script>
<script src="/js/modernizr.custom.js"></script>
@endsection
</body>
