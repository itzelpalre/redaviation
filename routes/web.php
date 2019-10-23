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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard-admin', function (){
  return 'administrador';
  //  return view('views.vista_para_admin');
})->name('admin.dashboard'); // <--- este es el nombre que busca el controlador.

Route::get('/dashboard', function (){
  return 'no administrador';
    //return view('views.vista_para_user');
})->name('regular.dashboard'); // <--- este es el nombre que busca el controlador.

Route::get('/', function () {
    return view('welcome');
});

Route::resource('registroclientes', 'PermisosRol');

Route::get('usuariologueado', function () {
    return view('administrador.pruebas');
});

/*Route::get('/', function (){
  return view('login.accesos');
});*/

Route::get('profile', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic');

Route::resource('contacts', 'ContactController');

/* Rutas Usuario Administrador */
Route::resource('administrador', 'AdministradorController');

/* Rutas OT's */
Route::resource('otingenieria', 'OtIngenieriaController');
Route::resource('otresultados', 'OtResultadosController');
Route::post('otstatus', 'OtResultadosController@myFormFunction');

/* Rutas Demo */
Route::get('demo', 'demoController@obtenerDatos');

/* Roles de Usuario */
Route::get('notes', 'NotesController@index');
Route::get('notes/{id}/destroy', 'NotesController@destroy')->name('notes.destroy');

/* Rutas Usuario Ingenieria */
//Route::resource('ingenieria', 'IngenieriaController');

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
