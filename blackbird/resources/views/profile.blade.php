@extends('layout')
@section('css')
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/common.css">
  <link rel="stylesheet" href="/css/index.css">
  <link rel="stylesheet" href="/css/videohome.css">
  <link rel="stylesheet" href="/css/fontawesome/css/all.css">
  <link rel="stylesheet" href="/css/style.css">
@endsection

@section('title')
  Mi Perfil
@endsection

@section('texto')
  Perfil
@endsection

@section('main')
  <div class="container">
    <h1>¡Hola {{$user->name}}!</h1>
    <img src="/storage/{{$user->imagen}}" alt="" style="border-radius:50%;" width="45%">
      <div class="form-group">
        <label for="email">E-mail: </label>
          {{$user->email}}
      </div>
      <div class="">
        <form class="" action="/users/{{$user->id}}/editar" method="post">
        @csrf
        <a class="btn btn-success" href="/burger">Editar mi Perfil</a>
        </form>
      </div>
    </div>
  @endsection
