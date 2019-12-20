<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function bot(Request $req){

      $respuestaEnviada= $req["pregunta"];

      return view("faq", compact('respuestaEnviada'));
    }
}
