<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use Auth;
use App\Producto;
use App\User;

class carritoController extends Controller
{

  public function carrito()
  {

      $productos = \Auth::user()->carrito;

      return view('carrito', compact(['productos']));
  }

  public function agregar(int $producto_id, Request $request)
  {
    //busco al usuario
    $user = \Auth::user();

    //verifico si el producto ya esta en el carrito
    $producto = $user->carrito->first(function (Producto $producto) use ($producto_id) {
        return $producto_id == $producto->id;
    });

    // si esta el producto sumo la cantidad
    if ($producto) {

      return redirect('/carrito')
          ->with('status', 'Sumaste otra hamburguesa en tu carrito')
          ->with('operation', 'success');
    }

    //uso la relacion carrito
    $user->carrito()->attach($producto_id);

    return redirect('/carrito')
        ->with('status', 'Hamburgesa agregada a tu carrito :)')
        ->with('operation', 'success');
  }

  public function eliminar(int $producto_id, Request $request)
  {
    //busco al usuario
    $user = \Auth::user();

    //verifico si el producto ya esta en el carrito
    $producto = $user->carrito->first(function (Producto $producto) use ($producto_id) {
        return $producto_id == $producto->id;
    });


    if ($producto) {

    $user->carrito()->detach($producto_id);

      return redirect('/carrito')
          ->with('status', 'Producto eliminado exitosamente :(')
          ->with('operation', 'warning');
    }

      return redirect('/carrito')
          ->with('status', 'No tenes hamburguesas en tu carrito')
          ->with('operation', 'warning');

  }

}
