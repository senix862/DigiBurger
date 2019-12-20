<?php

$opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
$dataBase= new PDO ("mysql:dbname=blackbird_db;host:localhost;port:3306","root","", $opt);

function buscarRespuesta(PDO $db) {
$buscador= $respuestaEnviada ?? '';
$conec=$db->prepare("SELECT respuesta from preguntas where pregunta like '%$buscador%'");
  $conec->execute();
  $res= $conec->fetchAll(PDO::FETCH_ASSOC);
  if($res != null){
    return $res;
  } else {
    $respuestaDefault=[["respuesta"=>"Puede que no te esté entendiendo o no esté preparado para responder eso, pero seguro nuestros colegas de DIGIBURGER sí!"]];
    return $respuestaDefault;
}}
$pregunta1="Hola! Soy Hamburguesita ¿En qué puedo ayudarte ayudarte?";
$respuestaBase="
¿Te gustaría conocer más? ¡Visitanos!
¿Puedo ayudarte en algo más?";
if ($respuestaEnviada ?? '') {
  $res=buscarRespuesta($dataBase);
  $respuesta=$res[0]["respuesta"].$respuestaBase;
  $pregunta=$respuestaEnviada ?? '';
};
 // var_dump($res);
?>

@extends("layout")

  @section("main")

      @section('css')
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <link rel="shortcut icon" href="../favicon.ico">
      <link rel="stylesheet" type="text/css" href="/css/common.css">
      <link rel="stylesheet" href="/css/index.css">
      <link rel="stylesheet" href="/css/gal.css">
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
            <p class="chat-mensaje"><?=$pregunta1?></p>
          </div>

          <?php if(isset($pregunta)){
             ?><div class="chat usuario">
                  <div class="user-photo"><img src="/img/user.png" alt=""></div>
                  <p class="chat-mensaje">{{$respuestaEnviada ?? ''}}</p>
                </div>
                <div class="chat galyleo">
                  <div class="user-photo"><img src="/img/burgerRegistro.png" alt=""></div>
                  <p class="chat-mensaje"><?=$respuesta?></p>
                </div>
                <?php
          } ?>
        </div>
        <div class="chat-form">
          <form class="" action="/faq" method="post">
            {{ csrf_field() }}

          <textarea id="mensaje" name="pregunta"></textarea>
          <button type="submit" name="button" for="mensaje"><i class="fas fa-chevron-circle-right"></i></button>
          </form>
        </div>
      </div>
      <div class="astros">
        <img src="IMG/galyleo2.png" alt="">
      </div>
      <div class="planetario">
        <img src="IMG/planetario.png" alt="">
      </div>
          <article class="pregunta" style="text-align:center;">
            <h3>¿Dónde están ubicados?</h3>
            <p>Estamos en Lima 1111. 2do Piso.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309494247746!2d-58.38378388530638!3d-34.62107608045496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1568083946385!5m2!1ses-419!2sar" width="90%" height="30%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </article>
        </section>

    </main>
@endsection
