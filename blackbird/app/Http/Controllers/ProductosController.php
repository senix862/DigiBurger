<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\User;

class ProductosController extends Controller
{
  public function listado(){
    $prod = Producto::all();
    return view('indexVideo', compact('prod'));
  }
  public function show(){
    $productos = Producto::paginate(6);

    return view('listado', compact('productos'));
  }
  public function detalle($id){
    $producto = Producto::find($id);

    return view('detalleProducto', compact('producto'));
  }


  public function new()
  {
      $categorias = Categoria::all();
      return view('addProd', compact('categorias'));
  }

  public function agregar(Request $req)
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

    $prodNuevo = new Producto;
    $imagenF = '';
    if ($req->file('imagen')) {
      $imagen = $req->file('imagen')->store('public');
      $imagenF= basename($imagen);
    }

    $prodNuevo->nombre = $req["nombr"];
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

public function edit($id)
{
    $producto = Producto::find($id);

    $categorias = Categoria::all();

    return view('editarProducto', compact(['producto', 'categorias']));
}

public function update(Request $req, $id)
{
    //primero valido lo datos
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
      'title.string' => 'El titulo debe ser un texto',
      'numeric' => 'Debe ser un numero',
      'between' => 'Debe de estar entre :min y :max',
      'integer' => 'Debe ser un numero',
    ];
    $this->validate($req, $reglas, $mesagge);
    $imagenF = '';
    if ($req->file('imagen')) {
      $imagen = $req->file('imagen')->store('public');
      $imagenF= basename($imagen);
    }
    $nuevaBurger = Producto::find($id);
    $imagen = $req->file('imagen')->store('public');
    $imagenF= basename($imagen);

    $nuevaBurger->nombre = $req["nombr"];
    $nuevaBurger->precio = $req["precio"];
    $nuevaBurger->descuento = $req["descuento"];
    $nuevaBurger->calorias = $req["calorias"];
    $nuevaBurger->categoria_id = $req["categoria_id"];
    $nuevaBurger->imagen = $imagenF;
    $nuevaBurger->ingredientes = $req["ingredientes"];

    $nuevaBurger->save();

    return redirect('/productos')
        ->with('status', 'Modificaste la hamburguesa exitosamente!!!')
        ->with('operation', 'success');
}

public function delete($id)
{
    //buscamos la hamburgesa por su id
    $producto = Producto::find($id);

    //si tiene imagen la borro
    $image_path = storage_path('app/public/') . $producto->imagen;
    if ($producto->imagen && file_exists($image_path)) {
        unlink($image_path);
    }
    //la elimino de la bd
    $producto->delete();

    return redirect('/productos')
        ->with('status', 'Hamburgesa eliminada exitosamente!!!')
        ->with('operation', 'warning');
}
 }
