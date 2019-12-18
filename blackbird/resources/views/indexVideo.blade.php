@extends('layout')
@section('css')

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/demo.css">
  <link rel="stylesheet" type="text/css" href="/css/common.css">
  <link rel="stylesheet" type="text/css" href="/css/style4.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
  <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/videohome.css">
  <link rel="stylesheet" href="/css/fontawesome/css/all.css">

@endsection
    <meta name="viewport" content="width=device-width,initial-scale-1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      @section('title')
        DigiBurger
      @endsection
{{-- @section('main') --}}
<section class="video">
  <div class="fullscreen-video">
    <video autoplay muted loop>
      <source src="/img/burger0.mp4" type="video/mp4">
    </video>
      <div class="bajar">
      <a href="#ver-mas"><i  id="goDown" class="fas fa-angle-down" onmouseover="style.color='rgba(255,255,255,1)'" onmouseout="style.color='rgba(255,255,255,0.1)'"></i></a>
      </div>
  </div>
</section>

<section id="circulos">
  <h1 id="ver-mas">NUESTRAS BURGERS</h1>

    <section class="main">

      <ul class="ch-grid">
        <li>
          <div class="ch-item ch-img-1">
            <div class="ch-info-wrap">
              <div class="ch-info">
                <div class="ch-info-front ch-img-1"></div>
                <div class="ch-info-back">
                  <h3><a href="http://drbl.in/ewUW">LAS CLÁSICAS</a></h3>
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
                  <h3><a href="http://drbl.in/elmi">LAS DE AUTOR</a></h3>
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
                  <h3><a href="http://drbl.in/dfhn">LAS VEGANAS</a></h3>
                  <p>by Digiburger</p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
    </section>

<script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
{{-- @foreach($prod as $producto)
  <section class="productos">
    <article>
      <div class="photo-container">
        <img class="foto" src="/storage/{{$producto->imagen}}" alt="">
        <a class="ver-categoria" href="">{{$producto->nombre}}</a>
      </div>
    </article>
  </section>
@endforeach --}}

{{-- @endsection --}}
