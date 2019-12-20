@extends('layout')

  @section('css')
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/common.css">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/videohome.css">
  <link rel="stylesheet" href="/css/fontawesome/css/all.css">
  <link rel="stylesheet" href="/css/registro.css">
  @endsection

  @section('title')
    Burger - Registro
  @endsection

  @section('texto')
    Registro
  @endsection

@section('main')

  <div class="registroExitoso" style="padding:15%;">
    <h1>¡Usted se ha registrado exitosamente!</h1>
    <img src="/img/burgerRegistro.png" alt="" style="width:20%;">
  </div>
  <div class="registroExitoso">
    <a style=""class="btn btn-success" href="/productos">Veamos las hamburguesas ahora :)</a>
  </div>



@endsection
