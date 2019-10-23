<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Traits\HasRoles;

class PermisosRol extends Controller
{

  use HasRoles;

  public function index(){
      return view('administrador.createuser');
  }

  public function store(Request $request){
        // Se crea el usuario con los datos del registro
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'perfil' => $request->perfil,
        ]);

        $perfil = $user->perfil;

        if (($perfil == 'administrador'))
            {
              $user->assignRole('administrador');
            }
            elseif (($perfil == 'ingenieria'))
            {
              $user->assignRole('ingenieria');
            }
            elseif (($perfil == 'supervisor'))
            {
              $user->assignRole('supervisor');
            }
            elseif (($perfil == 'tecnico'))
            {
              $user->assignRole('tecnico');
            }
            elseif (($perfil == 'almacen'))
            {
              $user->assignRole('almacen');
            }
            elseif (($perfil == 'compras'))
            {
              $user->assignRole('compras');
            }
            elseif (($perfil == 'gesa'))
            {
              $user->assignRole('gesa');
            }
            elseif (($perfil == 'cliente'))
            {
              $user->assignRole('cliente');
            }

        // Le asignamos el rol de Cliente
      //  $user->assignRole('supervisor');

        //Asignación de rol según perfil de usuario

    }


}
