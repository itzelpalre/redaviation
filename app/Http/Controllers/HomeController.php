<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Traits\HasRoles;
use AuthenticatesUsers;

class HomeController extends Controller
{

  use HasRoles;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index(Request $request)
     {
       return view('home');
    /* if(($request->role == 'ingenieria'))
     {
       return 'eres ingeniero';
     }
     elseif (($request->role == 'administrador'))
     {
       return 'eres administrador';
     }*/
 }
}
