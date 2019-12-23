@extends('layout')

@section('css')
  <link rel="stylesheet" href="/css/login.css">
  <link rel="stylesheet" href="/css/index.css">
@endsection

@section('title')
  Login
@endsection

@section('texto')
  Ingresar
@endsection

@section('main')
<div class="container">
    <div class="cuerpo">

                <div class="datos">
                  <h1 style="font-family: 'Alatsi', sans-serif;">INGRESAR</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <label for="email" class="">{{ __('E-mail') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        <div class="">
                            <label for="password" class="">{{ __('Contraseña') }}</label>

                            <div class="">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>

                        </div>
                    <div class="button">
                    <button type="submit" class="" name="button" id="ingresar">
                        {{ __('Ingresar') }}
                    </button>
                    <div class="">
                      @if (Route::has('password.request'))
                          <a class="" href="{{ route('password.request') }}">
                              {{ __('Olvidé mi contraseña') }}
                          </a>
                      @endif
                    </div>
                  </div>


                    </form>
</div>
  <script src="/js/login.js"></script>
@endsection
