<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class carritoController extends Controller
{
  public function carrito()
  {
      $productos = \Auth::user()->carrito;


      return view('carrito', compact('productos'));
  }

  public function agregarAlCarrito(Request $req)
  {

    $prodNuevo = new Carrito;

    $prodNuevo->producto_id = $req["producto_id"];
    $prodNuevo->user_id = $req["user_id"];

    $prodNuevo->save();

    return redirect('/productos')
        ->with('status', 'Agregaste un producto exitosamente :)')
        ->with('operation', 'success');
  }
  public function eliminarDelCarrito($id)
  {
      //buscamos el pedido en el carrito
      $carrito = Carrito::find($id);

      //la elimino de la bd
      $carrito->delete();

      return redirect('/carrito')
          ->with('status', 'Producto eliminado exitosamente :(')
          ->with('operation', 'warning');
  }

}
