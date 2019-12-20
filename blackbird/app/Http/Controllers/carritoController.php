<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrito;
use Auth;
use App\Producto;
use App\User;

class carritoController extends Controller
{
  public function __construct()
  {
    if(!\Session::has('carrito')) \Session::put('carrito', array());
  }

  public function carrito()
  {

      $productos = \Auth::user()->carrito;

      $carrito = \Session::get('carrito');

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
    public function agregar($producto_id)
    {
      // $imagen = $data['imagen']->store('public');
      // $imagen= basename($imagen);
      $reglas = [
        "nombr" => "required|string",
        "precio" => "required|numeric",
        "descuento" => "numeric|between:0,99",
        "calorias" => "integer|min:0",
        "categoria_id" => "required",
        "imagen"=> "required|file",
        "ingredientes" => "required|string"
      ];
      $mesagge= [
        'required' => 'Completa este campo',
        'nombre.string' => 'El titulo debe ser un texto',
        'numeric' => 'Debe ser un numero',
        'between' => 'Debe de estar entre :min y :max',
        'integer' => 'Debe ser un numero',

      ];
      $this->validate($req, $reglas, $mesagge);

      $prodNuevo = new Pedito;
      $imagenF = '';
      if ($req->file('imagen')) {
        $imagen = $req->file('imagen')->store('public');
        $imagenF= basename($imagen);
      }

      $prodNuevo->cantidad = $req["nombr"];
      $prodNuevo->precio = $req["precio"];
      $prodNuevo->descuento = $req["descuento"];
      $prodNuevo->calorias = $req["calorias"];
      $prodNuevo->categoria_id = $req["categoria_id"];
      $prodNuevo->imagen = $imagenF;
      $prodNuevo->ingredientes = $req["ingredientes"];

      $prodNuevo->save();

      return redirect('/productos')
          ->with('status', 'Creaste una hamburguesa nueva!!!')
          ->with('operation', 'success');
    }


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
