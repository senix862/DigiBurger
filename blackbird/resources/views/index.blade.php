@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/style.css">
  @endsection

  @section('title')
    Burger
  @endsection

  @section('texto')
    Productos Destacados
  @endsection

@section('main')
  @foreach($prod as $producto)
    <section class="productos">
      <article>
        <div class="photo-container">
          <div class="glitch-pic">
            <img class="foto" src="/storage/{{$producto->imagen}}" alt="">
          </div>
          <a class="ver-categoria" href="">{{$producto->nombre}}</a>
        </div>
      </article>
  @endforeach
@endsection
