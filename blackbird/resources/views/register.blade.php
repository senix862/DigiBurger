@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/registro.css">
  @endsection

  @section('title')
    Burger - Registro
  @endsection

  @section('texto')
    Registro
  @endsection

@section('main')
<div class="cuerpo">
      <form method="POST" action="{{ route('register') }}" enctype="multipart/formdata">
          @csrf
            <label for="name" >Nombre:</label>
            <br>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="apellido">Apellido:</label>
            <br>
            <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{old('apellido')}}" >
              @error('apellido')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <br>
            <label for="pais" class="form-control @error('pais') is-invalid @enderror">País:</label>
            <br>
            <select name="pais">
              <option value="">seleccione un país</option>
              <option
              @foreach ($paises as $pais)
                <option value="{{$pais->id}}">{{$pais->pais}}</option>
            @endforeach
            </select>
            @error('pais')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="avatar">Subir foto de perfil</label>
            <input type="file"  id="avatar" name="avatar" class="form-control @error('avatar') is-invalid @enderror">
              @error('avatar')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <br>
            <label for="date">Fecha de nacimiento:</label>
            <br>
            <input id="date" type="date" name="date" value="" class="form-control @error('date') is-invalid @enderror">
            @error('date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="email">E-mail:</label>
            <br>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <br>
            <label for="password">Contraseña:</label>
            <br>
            <input id="password" type="password" name="password" value="" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label for="password2">Repetir contraseña:</label>
            <br>
            <input id="password2" type="password" name="password_confirmation" value="" class="form-control @error('password_confirmation') is-invalid @enderror">
            @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
            @enderror
            <br>
            <br>
            <input class="check" type="checkbox" name="terminos" value="1" > Acepto los <a href="#">Términos y condiciones</a>.
            <br>
            <input class="check" type="checkbox" name="newsletter" value=""> Deseo recibir ofertas por mail.
            <br>
            <button id="registro" type="submit" name="button">Registro</button>
                      </form>
@php

@endphp

  @endsection
