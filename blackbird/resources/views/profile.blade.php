@extends('layout')

  @section('css')
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
