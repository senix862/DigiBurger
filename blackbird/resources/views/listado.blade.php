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
               <h3>Hamburguesas en Black-Bird</h3>
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
<li>
  <div class="ch-item ch-img-1">
    <div class="ch-info-wrap">
      <div class="ch-info">
        <div class="ch-info-front ch-img-1"></div>
        <div class="ch-info-back">
          <h3>{{$producto->nombre}}</h3>
          <p>{{ $producto->getCategoriaName() }}</p>
          <p>Precio: {{  $producto->precio }}</p>
        </div>
      </div>
    </div>
  </div>
</li>
<form class="form-add-my-list" action="/carrito/{{$producto->id}}" method="post">
    @csrf
    <button type="submit" class="no-button">
        <img src="/images/heart_no_like.png" class="like">
    </button>
</form>
<a class="btn btn-primary" href="/productos/{{$producto->id}}">Ver Mas</a>
<a class="btn btn-success" href="/productos/{{$producto->id}}/editar">Editar</a>
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
