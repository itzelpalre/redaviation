<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;
use Carbon\Carbon;

class demoController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function obtenerDatos()
    {
          //$mytime = Carbon\Carbon::now();
        /*  $now = new \DateTime();
          echo $now->format('d-m-Y H:i:s'); */
          $date = Carbon::now();
    }
}
