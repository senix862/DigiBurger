<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bot;
class FaqController extends Controller
{
    public function bot(Request $req){
      // declaro una respuesta automatica a todo
      $respuestaBase="
      ¿Te gustaría conocer más? ¡Visitanos!
      ¿Puedo ayudarte en algo más?";
      // tomo la pregunta del formulario
      $pregunta= $req["pregunta"];

      //busco la pregunta en la base de datos
      $respuesta = Bot::where("pregunta", 'like', '%'.$pregunta.'%')
                    ->first();

      // si la encuentro tomo el atributo respuesta y lo concateno con la $respuestaBase
      if ($respuesta != NULL) {
        $respuesta = $respuesta->respuesta;
        $respuesta = $respuesta . $respuestaBase;
        // si no la encuentro declaro una respuesta "escudo"
      } else {
        $respuesta = "Puede que no te esté entendiendo o no esté preparado para responder eso, pero seguro mis colegas de DIGIBURGER sí!";
      }

      return view("faq", compact('pregunta','respuesta'));
    }
}
