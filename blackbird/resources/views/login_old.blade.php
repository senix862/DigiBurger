@extends('layout')

  @section("main")

      @section('css')
        <link rel="stylesheet" href="/css/login.css">
        <script type="text/javascript" src="/js/login.js">

        </script>
      @endsection

      @section('title')
        Ingreso
      @endsection

      @section('texto')
        Ingresar
      @endsection

<div class="datos">
  <form class="" action="login.php" method="post">
    <label for="email">E-mail:</label>
    <br>
    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="<?= $email?>">
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    <label for="password">Contraseña:</label>
    <br>
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"name="password" value="">
      @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    <div class="cookie">
      <input class="form-check" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
      <label class="" id="recuerd" for="remember">
          {{ __('Mantenerme Conectado') }}
      </label>
    </div>
    <a href="#">olvidé mi contraseña</a>
    <br>
    <button id="ingresar" type="submit" name="button">Ingresar</button>
  </form>
    <a href="register">Registrarme</a>
</div>
@endsection
