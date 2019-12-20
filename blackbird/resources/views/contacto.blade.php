@extends('layout')

  @section("main")

      @section('css')
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" type="text/css" href="/css/common.css">
      <link rel="stylesheet" href="/css/index.css">
      <link rel="stylesheet" href="/css/videohome.css">
      <link rel="stylesheet" href="/css/fontawesome/css/all.css">
      <link rel="stylesheet" href="/css/contacto.css">
      @endsection

      @section('title')
        Contacto
      @endsection

      @section('texto')
        Contacto
      @endsection
      <section id="contacto">
        <section class="datos">
        <h1>Contactate con nosotros!</h1>
        <a href="tel:1128535609"><i class="fas fa-phone-alt"></i> +54 11 2853-5609</a>
        <br>
        <a href="https://wa.me/15551234567"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        <br>
        <a href="mailto:contacto@digitalhouse.com"><i class="far fa-envelope"></i> Email</a>
      </section>
      <section class="mapa">
        <h2>Estamos en Lima 1111, piso 2. Ciudad Autonoma de Buenos Aires</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3311393278614!2d-58.38386198530627!3d-34.62107128045505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital%20House!5e0!3m2!1ses!2sar!4v1576828152600!5m2!1ses!2sar" width="60%" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </section>
        <form class="" action="messenger" method="post">
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
        <button id="send" type="submit" name="button">Enviar</button>
        </form>
      </section>
@endsection
