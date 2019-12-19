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

      $carrito = Carrito::all();

      return view('carrito', compact(['productos','carrito']));
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
      $id_carrito=$user->carrito->id;
      $carrito = Carrito::find($id_carrito);
      $carrito->cantidad = $carrito->cantidad + 1;
      $carrito->save();
      return redirect('/carrito')
          ->with('status', 'Ahora hay '. $producto->cantidad . ' hamburguesas en tu carrito')
          ->with('operation', 'success');
    }

    //uso la relacion carrito
    $user->carrito()->attach($producto_id);
    //redirijo
    return redirect('/productos')
        ->with('status', 'Agregaste un producto exitosamente :)')
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
      //si hay mas de uno resto la cantidad
      if($producto->cantidad > 1){
        $producto->cantidad = $producto->cantidad - 1;
        $producto->save();
        return redirect('/productos')
        ->with('status', 'Ahora hay '. $producto->cantidad . ' hamburguesas en tu carrito')
        ->with('operation', 'success');
       }
      //si solo habia uno la borro
      $producto->delete();

      return redirect('/carrito')
          ->with('status', 'Producto eliminado exitosamente :(')
          ->with('operation', 'warning');
  }

}
}
