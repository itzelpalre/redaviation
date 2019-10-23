<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administracion;
/*use Illuminate\Support\Facades\Redirect;
use Http\Requests\AdministradorFormRequest;
use DB;*/

class UsuarioController extends Controller
{
  public function show($id)
 {
    // return view('main', ['user' => Administrador::findOrFail($id)]);

    // Buscamos el id en la tabla
        $dato = Administracion::find($id);
        // retornamos la vista con los datos
        return view('base')->with('dato', $dato);
      // return view('main')->with('dato', $id);
        // with() nos permite pasar variables a la vista
        // el primer parámetros es el nombre con el que estará disponible en la vista
        // el segundo son los datos.

 }
 
 /*public function mostrar()
{

$posts = ['Básico', 'Intermedio', 'Avanzado'];
return view('main', compact('posts'));
}*/

}
