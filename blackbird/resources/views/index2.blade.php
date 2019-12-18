@extends('layout')
@section('css')
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/videohome.css">
  <link rel="stylesheet" href="css/fontawesome//css/all.css">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="/css/common.css" />
  <link rel="stylesheet" type="text/css" href="/css/style4.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
@endsection
    <meta name="viewport" content="width=device-width,initial-scale-1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      @section('title')
        DigiBurger
      @endsection

<section class="vid-header container">
  <div class="fullscreen-video">
    <video autoplay muted loop>
      <source src="/img/burger0.mp4" type="video/mp4">
    </video>
      <div class="bajar">
      <a href="#ver-mas"><i  id="goDown" class="fas fa-angle-down" onmouseover="style.color='rgba(255,255,255,1)'" onmouseout="style.color='rgba(255,255,255,0.1)'"></i></a>
      </div>
  </div>
</section>
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
{{-- @foreach($prod as $producto)
  <section class="productos">
    <article>
      <div class="photo-container">
        <img class="foto" src="/storage/{{$producto->imagen}}" alt="">
        <a class="ver-categoria" href="">{{$producto->nombre}}</a>
      </div>
    </article>
@endforeach --}}



    <section class="section-b">
      <div class="container">
        <h1>Aqui van cosas B</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </section>
