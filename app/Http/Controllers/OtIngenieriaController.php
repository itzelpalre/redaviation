<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ot;
use DB;
use Carbon\Carbon;

class OtIngenieriaController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {

     $name = $request->get('ot');

     $numeroOt = Ot::orderBy('id', 'DESC')
                ->name($name)
                ->paginate(4);

     $datosot = Ot::all();


foreach($datosot as $fecha)
{

  $fechaActualizacion = Carbon::parse($fecha->updated_at);
  $fechaActual = Carbon::now();
  $diferenciaFechas = $fechaActual->diffInDays($fechaActualizacion);
  $fecha->estatus=$diferenciaFechas;

  if($diferenciaFechas <= 1)
  {
    $fecha->estatus='actualizada';
  }
  if($diferenciaFechas >= 2)
  {
    $fecha->estatus='en proceso';
  }
  if($diferenciaFechas >= 5)
  {
    $fecha->estatus='requiere atención';
  }
}

     return view('ots.otingenieria.index', compact('datosot', 'numeroOt', 'diferenciaFechas'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('ots.otingenieria.create');

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
      $request->validate([
          'numeroOt'=>'required',
          'fechaAlta'=>'required',
          'companiaSolicitaServicio'=>'required',
          'tipoAeronave'=>'required',
          'matricula'=>'required',
          'modelo'=>'required',
          'numeroSerie'=>'required',
          'hangar'=>'required',
          'ttMotor1'=>'required',
          'ttMotor2'=>'required',
          'numeroParteMotor1'=>'required',
          'numeroParteMotor2'=>'required',
          'numeroSerieMotor1'=>'required',
          'numeroSerieMotor2'=>'required',
          'numeroSeriePlaneador'=>'required',
          'ttPlaneador'=>'required',
          'ciclosTotales'=>'required',
          'observaciones'=>'required',
          'horasTrabajoEstimadas'=>'required',
          'reporte'=>'required',
          'fechaInicio'=>'required',
          'origenReporte'=>'required',
      ]);

      $contact = new Ot([
          'numeroOt' => $request->get('numeroOt'),
          'fechaAlta' => $request->get('fechaAlta'),
          'companiaSolicitaServicio' => $request->get('companiaSolicitaServicio'),
          'tipoAeronave' => $request->get('tipoAeronave'),
          'matricula' => $request->get('matricula'),
          'modelo' => $request->get('modelo'),
          'numeroSerie' => $request->get('numeroSerie'),
          'hangar' => $request->get('hangar'),
          'ttMotor1' => $request->get('ttMotor1'),
          'ttMotor2' => $request->get('ttMotor2'),
          'numeroParteMotor1' => $request->get('numeroParteMotor1'),
          'numeroParteMotor2' => $request->get('numeroParteMotor2'),
          'numeroSerieMotor1' => $request->get('numeroSerieMotor1'),
          'numeroSerieMotor2' => $request->get('numeroSerieMotor2'),
          'numeroSeriePlaneador' => $request->get('numeroSeriePlaneador'),
          'ttPlaneador' => $request->get('ttPlaneador'),
          'ciclosTotales' => $request->get('ciclosTotales'),
          'observaciones' => $request->get('observaciones'),
          'horasTrabajoEstimadas' => $request->get('horasTrabajoEstimadas'),
          'reporte' => $request->get('reporte'),
          'fechaInicio' => $request->get('fechaInicio'),
          'origenReporte' => $request->get('origenReporte')

      ]);
      $contact->save();
      return redirect('/otingenieria')->with('Bien', 'Se ha guardado la OT');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

      $contact = Ot::find($id);
    //  $estatus = Ot::find($estatus);


    //  $fechaActualizacion = $contact->updated_at;
      $fechaActualizacion = Carbon::parse($contact->updated_at);
      $fechaActual = Carbon::now();
    //  $fechaActual = Carbon::now();
    //  $fechaActual = $fechaActual->format('d-m-Y');
      $diferenciaFechas = $fechaActual->diffInDays($fechaActualizacion);
    //  $status = $contact->estatus=>'verde';


    /*  if($diferenciaFechas >= 5)
      {
        return 'El status está en rojo';
      }else if($diferenciaFechas >= 2)
      {
        return 'El status está en amarillo';
      }*/

      return view('ots.otingenieria.show', compact('contact', 'fechaActualizacion', 'fechaActual', 'diferenciaFechas'));



  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $contact = Contact::find($id);
      return view('contacts.edit', compact('contact'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      $request->validate([
          'first_name'=>'required',
          'last_name'=>'required',
          'email'=>'required'
      ]);

      $contact = Contact::find($id);
      $contact->first_name =  $request->get('first_name');
      $contact->last_name = $request->get('last_name');
      $contact->email = $request->get('email');
      $contact->job_title = $request->get('job_title');
      $contact->city = $request->get('city');
      $contact->country = $request->get('country');
      $contact->save();

      return redirect('/contacts')->with('success', 'Contact updated!');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $contact = Contact::find($id);
      $contact->delete();

      return redirect('/contacts')->with('success', 'Contact deleted!');
  }

}
