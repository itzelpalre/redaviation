<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Routing\Route;
use App\Administrador;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    //protected $redirectTo = '/home';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        $perfil = $user->perfil;

        if (($perfil == 'administrador'))
            {
              return redirect()->action('AdministradorController@index');
            }
            elseif (($perfil == 'ingenieria'))
            {
              return redirect()->action('OtIngenieriaController@index');
            }
            elseif (($perfil == 'supervisor'))
            {

              return 'te has logueado como supervisor';
            }
            elseif (($perfil == 'tecnico'))
            {
              return 'te has logueado como tecnico';
            }
            elseif (($perfil == 'almacen'))
            {
              return 'te has logueado como almacen';
            }
            elseif (($perfil == 'compras'))
            {
              return 'te has logueado como compras';
            }
            elseif (($perfil == 'gesa'))
            {
              return 'te has logueado como gesa';
            }
    }

    /* Redirecciona al usuario una vez logueado */

    public function redirectPath()
    {
        if (auth()->user()->hasRole($rolecliente)) {
            return '/otingenieria';
        }
    }
}
