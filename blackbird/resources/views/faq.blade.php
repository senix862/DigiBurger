@extends("layout")

  @section("main")

      @section('css')
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" type="text/css" href="/css/common.css">
      <link rel="stylesheet" href="/css/index.css">
      <link rel="stylesheet" href="/css/bot/bot.css">
      <link rel="stylesheet" href="/css/videohome.css">
      <link rel="stylesheet" href="/css/fontawesome/css/all.css">
        <link rel="stylesheet" href="/css/faq.css">
      @endsection

      @section('title')
        Preguntas Frecuentes
      @endsection

      @section('texto')
        Preguntas Frecuentas
      @endsection

      @section('main')
 <main>
      <!-- Preguntas y links -->
      <br>
      <br>
      <br>
      <br>
      <div class="chatbot">
        <div class="chatlogs">
          <div class="chat galyleo">
            <div class="user-photo"><img src="/img/burgerRegistro.png" alt=""></div>
            <p class="chat-mensaje">Hola! Soy Hamburguesita ¿En qué puedo ayudarte ayudarte?</p>
          </div>

          @if(isset($pregunta))
             <div class="chat usuario">
                  <div class="user-photo">
                  @auth
                  <img src="/storage/{{Auth::user()->avatar}}" alt="">
                  @else
                  <img src="/img/user.png" alt="">
                  @endauth
                  </div>
                  <p class="chat-mensaje">{{$pregunta ?? ''}}</p>
                </div>
                <div class="chat galyleo">
                  <div class="user-photo"><img src="/img/burgerRegistro.png" alt=""></div>
                  <p class="chat-mensaje">{{ $respuesta ?? '' }}</p>
                </div>
          @endif
        </div>
        <div class="chat-form">
          <form class="" action="/faq" method="post">
            {{ csrf_field() }}

          <textarea id="mensaje" name="pregunta"></textarea>
          <button type="submit" name="button" for="pregunta"><i class="fas fa-chevron-circle-right"></i></button>
          </form>
        </div>
      </div>
      <br>
      <br>
          <article class="pregunta" style="text-align:center;">
            <h3>¿Dónde están ubicados?</h3>
            <p>Estamos en Lima 1111. 2do Piso.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309494247746!2d-58.38378388530638!3d-34.62107608045496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1568083946385!5m2!1ses-419!2sar" width="90%" height="30%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </article>
          <br>
          <br>
        </section>

    </main>

@endsection
