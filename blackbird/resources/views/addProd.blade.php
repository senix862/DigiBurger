@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/registro.css">
  @endsection

  @section('title')
    Agregar Producto
  @endsection

  @section('texto')
    Nuevo Producto
  @endsection

@section('main')
  <form class="" id="Este" action="/products/nuevo" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="nombr">Hamburguesa:</label>
      <input type="text" class="form-control @error('nombr') is-invalid @enderror" id="nombr" name="nombr" value="{{old('nombr')}}">
      @error('nombr')
        <span class='invalid-feedback' role='alert'>
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group">
      <label for="precio">Precio:</label>
      <input type="number" min="1" step="any" class="form-control  @error('precio') is-invalid @enderror" id="precio" name="precio" value="{{old('precio')}}">
      @error('precio')
        <span class='invalid-feedback' role='alert'>
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group">
      <label for="descuento">Porcentaje de descuento: </label>
      <input type="number" min="0" step="1" class="form-control @error('descuento') is-invalid @enderror" id="descuento" name="descuento"  value="{{old('descuento')}}">
      @error('descuento')
        <span class='invalid-feedback' role='alert'>
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group">
      <label for="calorias">Calorias: </label>
      <input type="number" min="0" step="any" class="form-control @error('calorias') is-invalid @enderror" id="calorias" name="calorias"  value="{{old('calorias')}}">
      @error('calorias')
        <span class='invalid-feedback' role='alert'>
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group">
      <label for="categoria_id">Categoria: </label>
      <select class="form-control" name="categoria_id" id="categoria_id">
        <option value="">Elije una categoria</option>
    @foreach ($categorias as $categoria)
        <option value="{{$categoria->id}}" @if($categoria->id == old('categoria_id')) selected @endif>{{$categoria->nombre}}</option>
    @endforeach
      </select>
      @error('categoria_id')
          {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="ingredientes">Descripción: </label>
      <input type="string" class="form-control @error('ingredientes') is-invalid @enderror" id="ingredientes" name="ingredientes"  value="{{old('ingredientes')}}">
      @error('ingredientes')
        <span class='invalid-feedback' role='alert'>
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="form-group">
      <label for="imagen">Imagen: </label>
      <input type="file" id="imagen" name="imagen">
      @error('imagen')
          {{ $message }}
      @enderror
    </div>

    <a class="btn btn-secondary" href="/blackbird">Volver</a>
    <button type="submit" class="btn btn-primary" >Guardar</button>
  </form>
  @php
  var_dump($errors->all());
  @endphp
  <script type="text/javascript" src='/js/addProd.js'>

  </script>
@endsection
