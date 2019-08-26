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
  // if (Auth::guest()){
  //   return view ('auth.login');
  // } else {
  return view ('front.index');
//}
});


/* Rutas de Registro y Login */
Auth::routes();


Route::get('/testdb/{id}', 'DbController@index');


Route::get('/perfil', 'UserController@showProfile');
Route::post('/perfil', 'UserController@addProduct')->name('perfil');

Route::get('/somos',function (){
  return view ('front.somos');
});


// ruta productos
Route::get('/productos', 'ProductosController@getAll');
Route::get('/productos/{categoria}', 'ProductosController@getByCategory');

 // ruta productos
 Route::get('/producto/{id}', 'ProductosController@getById');
 Route::post('/producto/delete/{id}', 'ProductosController@destroy');
 Route::get('/producto/editar/{id}', 'ProductosController@edit');
 Route::post('/producto/editar/{id}', 'ProductosController@update');
 //Route::post('/producto/crear', 'ProductosController@store');


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

Route::resource('/wishlist', 'WishlistController', ['except' => ['create', 'edit', 'show', 'update']]);
// // ruta perfil
// Route::get('/perfil', function () {
//     return view('');
// });
// // ruta carrito
// Route::get('/carrito', function () {
//     return view('');
// });
//
// Auth::routes();
//
// Route::get('/home', 'HomeController@index')->name('home');
