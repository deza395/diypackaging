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

Route::get('/',function (){
  if (Auth::guest()){
    return view ('auth.login');
  } else {
  return view ('front.index');
}
});


/* Rutas de Registro y Login */
Auth::routes();


Route::get('/testdb/{id}', 'DbController@index');

Route::get('/somos',function (){
  return view ('front.somos');
});

// ruta productos
Route::get('/productos', function () {
    return view('front.productos');
 });

 // ruta productos
 Route::get('/productos/{id}', 'ProductosController@getById');

// // ruta diseños
// Route::get('/personalizados', function () {
//     return view('');
// });
// // ruta accesorios
// Route::get('/accesorios', function () {
//     return view('');
// });
// // ruta FAQ
Route::get('/faq', function () {
    return view('front.faq');
});
// // ruta perfil
// Route::get('/perfil', function () {
//     return view('');
// });
// // ruta carrito
// Route::get('/carrito', function () {
//     return view('');
// });
