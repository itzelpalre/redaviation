<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\filtroOt;
use App\Ot;

class OtResultadosController extends Controller
{
  public function index(Request $request)
  {

    $name = $request->get('ot');

    $numeroOt = Ot::orderBy('id', 'DESC')
                ->name($name)
                ->paginate(4);

     return view('ots.otingenieria.resultados', compact('numeroOt'));

  }

  public function myFormFunction(filtroOt $request)
    {

        /*$myVariable = $request['status'];
        return $myVariable;*/

        return 'status';
    }
}
