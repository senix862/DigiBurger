@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/index.css">
  @endsection

  @section('title')
    Mi Carrito
  @endsection

  @section('texto')
    En Detalle
  @endsection

  @section('main')

      <div class="container">
        <div class="card-group">
<?php $cantidad=1; ?>
@forelse ($productos as $producto)

   <div class="card card-peli">
     <img class="fondo-bur" src="/storage/{{$producto->imagen}}" style="border-radius=50%" width="30%">
     <div class="card-header">{{ $producto->nombre }}</div>
     <div class="card-body">
       <p class="card-text">{{ $producto->getCategoriaName() }}</p>
       <p class="card-text">Calorias: {{  $producto->calorias }}</p>
       <p class="card-text">Precio: $ {{  $producto->precio }}</p>
       <p class="card-text">Cantidad: <?=$cantidad?>
       </p>
       <p class="card-text">
         <form class="btn btn-success" action="/carrito/{{$producto->id}}"  method="post">
             @csrf
             <button type="submit" class="btn btn-success">
                 Agregar
             </button>
         </form>
         <form class="btn btn-danger" action="/carrito/{{$producto->id}}/eliminar" method="post">
             @csrf
             <button type="submit" class="btn btn-danger">
                 Eliminar
             </button>
         </form>
       </p>
     </div>
   </div>
   @empty
   <div class="registroExitoso" style="padding:15%;">
     <h1>¡TU CARRITO ESTA VACÍO!</h1>
     <img src="/img/hamburguesaTriste.jpg" alt="" style="width:20%;">
   </div>
   <div class="registroExitoso">
     <a style=""class="btn btn-success" href="/productos">Volvamos al listado :)</a>
   </div>
@endforelse
         </div>
          <div class="card-header">TOTAL: $
            @foreach ($productos as $producto)
            {{$producto->precio}}
            @endforeach
          </div>

      </div>


  @endsection
