<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/burger','ProductosController@listado');

Route::get('/perfil','UsuariosController@perfil')->middleware(['auth']);;

Route::get('/productos', 'ProductosController@show');
Route::get('/products/nuevo', 'ProductosController@new')->middleware(['auth', 'is_admin']);
Route::post('/products/nuevo', 'ProductosController@agregar')->middleware(['auth', 'is_admin']);

Route::get('/productos/{id}', 'ProductosController@detalle')->middleware(['auth']);
Route::get('/productos/{id}/editar',"ProductosController@edit")->middleware(['auth', 'is_admin']);
Route::patch('/productos/{id}', 'ProductosController@update')->middleware(['auth', 'is_admin']);
Route::delete('/productos/{id}', 'ProductosController@delete')->middleware(['auth', 'is_admin']);

Route::get('/carrito', 'CarritoController@carrito')->middleware(['auth']);
Route::post('/carrito/{id}', 'CarritoController@agregar')->middleware(['auth']);
Route::post('/carrito/{id}/eliminar', 'CarritoController@eliminar')->middleware(['auth']);


Route::get('/indexVideo', function () {
    return view('indexVideo');
});

Route::get('/productosCate', function () {
    return view('productosCate');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/registrocompleto', function () {
    return view('registrocompleto');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/profile', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
