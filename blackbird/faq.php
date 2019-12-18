<?php
$textoBanner="Preguntas Frecuentes";
class Faq {

  public function setFaq($faq){
    $this->faq = $faq;
  }
  public function getFaq(){
    return $this->faq;
  }

}

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css/fontawesome//css/all.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <title>Preguntas Frecuentes - Joyas y Bijouterie</title>
  </head>
  <body>
    <div class="container">
      <!-- Header -->
      <?php require_once('header.php'); ?>
      <!-- CONTENIDO -->
      <div class="cuerpo">
      <!-- Arranca el main-->
    <main>
      <!-- Preguntas y links -->
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
    <!-- Footer -->
      <?php require('partials/footer.php') ?>
    </div>
  </div>
</body>
</html>
