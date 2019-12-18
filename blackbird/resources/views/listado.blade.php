@extends('layout')

@section('css')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('main')

<section class="principal">
   <article class="nuevas" id="hamburguesas">
       <div class="hamburguesas">
          <div class="titulo-nav">
               <h3>Hamburguesas en Black-Bird</h3>
               <div>
             {{-- @if(Auth::user()->admin)
                 <a href="productos/nuevo" class="btn btn-primary">Nueva Burger</a>
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

         <div class="card-group">

@foreach ($productos as $producto)

    <div class="card card-peli">
      <img class="fondo-bur" src="/storage/{{$producto->imagen}}">
      <div class="card-header">{{ $producto->nombre }}</div>
      <div class="card-body">
        <p class="card-text">{{ $producto->getCategoriaName() }}</p>
        <p class="card-text">Rating: {{  $producto->calorias }}</p>
        <p class="card-text">Awards: {{  $producto->precio }}</p>
        <p class="card-text">
          <a class="btn btn-primary" href="/productos/{{$producto->id}}">Ver Mas</a>
          <a class="btn btn-success" href="/productos/{{$producto->id}}/editar">Editar</a>
          </p>
      </div>
    </div>
@endforeach
          </div>


       </div>
   </article>
</section>


  @endsection
