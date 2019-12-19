@extends('layout')

@section('css')
<link rel="stylesheet" href="/css/styles.css">
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="/css/demo.css">
<link rel="stylesheet" type="text/css" href="/css/common.css">
<link rel="stylesheet" type="text/css" href="/css/style4.css">
<link rel="stylesheet" href="/css/fontawesome/css/all.css">
@endsection

@section('main')

<section class="container">
   <article class="nuevas" id="hamburguesas">
       <div class="hamburguesas">
          <div class="titulo-nav">
               <h1>Nuestras BURGERS</h1>
               <div>
             {{-- @if(Auth::user()->admin)
                 <a href="/products/nuevo" class="btn btn-primary">Nueva Burger</a>
             @endif --}}
               </div>
         </div>
         <div class="sub-titulo">
             <div class="ordenamiento">
               <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?orden=title">Nombre</a></li>
                <li class="breadcrumb-item"><a href="?orden=genero">Categoria</a></li>
                <li class="breadcrumb-item "><a href="?orden=rating">Precio</a></li>
                <li class="breadcrumb-item active"><a href="?orden=awards">Calorias</a></li>
              </ol>
             </div>
             <nav >
                 {{$productos->links()}}
             </nav>
         </div>

         <div class="">
             @if (session('status'))
                <div class="alert alert-{{session('operation')}}">
                    {{ session('status') }}
                </div>
            @endif
         </div>
         <section class="main">

        <ul class="ch-grid">
@foreach ($productos as $producto)
<li id="burgers">
  <br>

  <div class="ch-item ch-img-1" style="background-image: url('/storage/{{$producto->imagen}}')">
    <div class="ch-info-wrap">
      <div class="ch-info">
        <div class="ch-info-front ch-img-1"style="background-image: url('/storage/{{$producto->imagen}}')"></div>
        <div class="ch-info-back">
          <h3>{{$producto->nombre}}</h3>
          <p>{{ $producto->getCategoriaName() }}</p>
          <p> </p>
          <h1 style="color=black;    position: relative;
    top: -58px;">Precio: ${{  $producto->precio }}</h1>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <a class="btn btn-primary" href="/productos/{{$producto->id}}">Ver Mas</a>
  <form class="btn btn-success" action="/carrito/{{$producto->id}}" method="post">
      @csrf
      <button type="submit" class="btn btn-success">
          Agregar al carrito
      </button>
  </form>

  @if(Auth::user()->is_admin)
  <a class="btn btn-warning" href="/productos/{{$producto->id}}/editar">Editar</a>
  @endif
</li>
@endforeach
</ul>


</section>
   </article>
</section>

<script type="text/javascript" src="/js/modernizr.custom.79639.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/jquery.dlmenu.js"></script>
<script src="/js/pagetransitions.js"></script>
<script src="/js/modernizr.custom.js"></script>
  @endsection
