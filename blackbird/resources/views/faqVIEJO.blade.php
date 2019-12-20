<?php

$opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"];
$dataBase= new PDO ("mysql:dbname=blackbird_db;host:localhost;port:3306","root","", $opt);

function buscarRespuesta(PDO $db) {
$buscador= $_POST["pregunta"];
$conec=$db->prepare("SELECT respuesta from preguntas where pregunta like '%$buscador%'");
  $conec->execute();
  $res= $conec->fetchAll(PDO::FETCH_ASSOC);
  if($res != null){
    return $res;
  } else {
    $respuestaDefault=[["respuesta"=>"Puede no te estemos entendiendo o no estamos preparados para responder eso, pero seguro nuestros colegas de DIGIBURGER sí!"]];
    return $respuestaDefault;
}}
$pregunta1="Hola! Soy  ¿En qué puedo ayudarte ayudarte?";
$respuestaBase="
¿Te gustaría conocer más? ¡Visitanos!
¿Puedo ayudarte en algo más?";

if ($_POST) {

  $res=buscarRespuesta($dataBase);
  $respuesta=$res[0]["respuesta"].$respuestaBase;
  $pregunta=$_POST["pregunta"];;

 }
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

      <!-- Preguntas y links -->
      <div class="chatbot">
        <div class="chatlogs">
          <div class="chat galyleo">
            <div class="user-photo"><img src="/img/burgerRegistro.png" alt=""></div>
            <p class="chat-mensaje"><?=$pregunta1?></p>
          </div>

          <?php if($_POST){
             ?><div class="chat usuario">
                  <div class="user-photo"><img src="/img/user.png" alt=""></div>
                  <p class="chat-mensaje"><?=$_POST["pregunta"]?></p>
                </div>
                <div class="chat galyleo">
                  <div class="user-photo"><img src="/img/burgerRegistro.png" alt=""></div>
                  <p class="chat-mensaje"><?=$respuesta?></p>
                </div>
                <?php
          } ?>
        </div>
        <div class="chat-form">
          <form class="" action="hola.php" method="post">


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
        <section class="preguntas">
          <article class="pregunta">
            <h3>¿Cómo comprar?</h3>
            <p>Tengo dudas sobre las especificaciones del producto, ¿qué hago?
            Todas las especificaciones técnicas vitales de cada producto figuran en su detalle. Si aún así tenés dudas, podés dejarnos tu consulta utilizando el botón <a href="contacto.php">“Contacto”</a>. Uno de nuestros asesores de venta te responderá a la brevedad.
            </p>
          </article>
          <article class="pregunta">
            <h3>¿Por qué debo consultar stock si el producto está publicado?</h3>
            <p>Debido a la enorme cantidad de productos disponibles y su alta rotación, resulta imposible mantener actualizado el stock al día. Te rogamos confirmar antes de realizar tu compra para evitar contratiempos.
            </p>
          </article>
          <article class="pregunta">
            <h3>Ya elegí mi producto, ¿Cómo realizo la compra?</h3>
            <p>Una vez en la página del producto elegido, hacé click en el botón "AGREGAR AL CARRITO" y elegí la cantidad de unidades. Si querés agregar otros artículos, elegí la opción "Seguir comprando". Una vez seleccionados todos los productos, volvé a tu Carrito y hacé click en "PAGAR". Allí deberás completar todos tus datos, fundamentales para ponernos en contacto y realizar tu envío. También podrás dejarnos un mensaje, como ser color, talle u otra especificación del producto pactada previamente con nuestro asesor.
            </p>
          </article>
          <article class="pregunta">
            <h3>¿Qué formas de pago puedo elegir?</h3>
            <p>Una vez ingresados tus datos, podrás elegir la forma de pago más conveniente: Tarjeta de crédito y efectivo a través de Mercado Pago, transferencia o depósito bancario. Los datos necesarios para ésta última operación aparecerán en pantalla una vez elegida la forma de pago.
            </p>
          </article>
          <article class="pregunta">
            <h3>¿Tienen promociones con tarjetas?</h3>
            <p>Por supuesto! Abonando tu compra a través de Mercado Pago, accedés a descuentos y financiación en cuotas sin interés. Chequeá las promociones vigentes <a href="https://www.mercadopago.com.ar/cuotas?seller_id=276920139">aquí</a>.
            </p>
          </article>
          <article class="pregunta">
            <h3>¿Puedo comprar desde cualquier parte del país?</h3>
            <p>Sí, los envios son por Mercadoenvios a cualquier lugar dentro de la República Argentina. Los datos necesarios para el envío son:

            Código Postal

            Nombre y apellido de quien recibe

            DNI

            Teléfono

            Dirección exacta, ciudad y provincia.
            </p>
          </article>
          <article class="pregunta">
            <h3>¿Cuánto se demora en despachar mi producto?</h3>
            <p>Los productos estarán disponibles para entrega en el correo o retiro a partir de las 24/48 hs hábiles de acreditado el pago, depósito o transferencia.
            </p>
          </article>
          <article class="pregunta">
            <h3>¿Dónde están ubicados?</h3>
            <p>Estamos en Lima 1111. 2do Piso.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309494247746!2d-58.38378388530638!3d-34.62107608045496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1568083946385!5m2!1ses-419!2sar" width="90%" height="30%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
          </article>
        </section>

    </main>
@endsection
