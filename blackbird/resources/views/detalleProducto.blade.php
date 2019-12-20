@extends('layout')

  @section('css')
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/common.css">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/fontawesome/css/all.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/videohome.css">
  @endsection

  @section('title')
    Detalle
  @endsection

  @section('texto')
    En Detalle
  @endsection

  @section('main')
      <div  class="container">
        <div class="contenedor-info">
        <h2 style="font-size: 35px; max-width:45%; margin-left: 27%">{{$producto->nombre}}</h2>
        <img src="/storage/{{$producto->imagen}}" alt="" style="border-radius:50%;"width="55%">
        <div class="form-group" style="font-size: 25px; text-align: center; max-width:55%">
          <div class="info-burger">
            <label for="rating">Ingredientes:  </label>
            {{$producto->ingredientes}}
          </div>
              <div class="form-group">
                <label for="rating">Precio: $ </label>
                {{$producto->precio}}
              </div>
              <div class="form-group">
                <label for="awards">Calorias: </label>
                {{$producto->calorias}}
              </div>
              <div class="form-group">
                <label for="length">Descuento:</label>
                {{$producto->descuento}} %
              </div>

              <div class="form-group">
                <label for="genre_id">Categoria:</label>

                {{ $producto->getCategoriaName() }}
              </div>
            </div>
            <div class="">
                <form class="" action="/productos/{{$producto->id}}" method="post">
                    @csrf
                    @method('delete')
                    <a class="btn btn-secondary" href="/productos/">Volver</a>

                    <a class="btn btn-success" href="/productos/{{$producto->id}}/edit">Editar</a>

                    <button type="submit" class="btn btn-danger" name="button">Eliminar</button>
                </form>
              </div>
            </div>
          </div>
  @endsection
