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

Route::get('/', function (){
  return view('login.accesos');
});

Route::resource('contacts', 'ContactController');

/* Rutas Usuario Administrador */
Route::resource('administrador', 'AdministradorController');





//Route::get('usuario/{id}', 'UsuarioController@show');

//Route::resource('administrador','AdministradorController@show');

/*Route::get('demo', function(){
  $posts = ['Básico', 'Intermedio', 'Avanzado'];
  //return view('main', ['posts'=>$posts]);
  return view('main', compact('posts'));
  //return view('main')->with('post', $post);
});*/

//Route::get('demoweb', 'UsuarioController@mostrar');

//Route::resource('administrador','PruebasController');

/*Route::post('/users/store','AdministracionController@store');
Route::post('/users/update/{id}','AdministracionController@update');
Route::get('/users/destroy/{id}','AdministracionController@destroy');

Route::controller('users','AdministracionController');*/

/*Route::get('administrador', function (){
return view('administrador.panelControl');
});*/

//Route::get('administrador', 'AdministracionController@mostrarPanel');
