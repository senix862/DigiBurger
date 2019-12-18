@extends('layout')

  @section("main")

      @section('css')
        <link rel="stylesheet" href="/css/contacto.css">
      @endsection

      @section('title')
        Contacto
      @endsection

      @section('texto')
        Contacto
      @endsection

      <label for="nombre">Nombre:</label>
      <br>
      <input id="nombre" type="text" name="nombre" value=""required>
      <br>
      <label for="email">E-mail:</label>
      <br>
      <input id="email" type="email" name="email" value=""required>
      <br>
      <label for="tel">Teléfono (opcional): </label>
      <br>
      <input id="tel" type="number" name="tel" value="">
      <br>
      <label for="mensaje">Mensaje:</label>
      <br>
      <textarea id="mensaje" name="mensaje" rows="" cols="" required></textarea>
      <br>
      <button type="submit" name="button">Enviar</button>

@endsection
