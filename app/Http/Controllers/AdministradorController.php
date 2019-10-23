<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Administrador;
use Carbon\Carbon;
use Spatie\Permission\Traits\HasRoles;

class AdministradorController extends Controller
{
  use HasRoles;
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
     $contacts = Administrador::all();
     $date = Carbon::now();
     $resultado = $date->subDays(1);

     return view('administrador.index', compact('contacts', 'resultado'));

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('administrador.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    $contact = new Administrador([
        'nombre' => $request->get('nombre'),
        'correo' => $request->get('correo'),
        'telefono' => $request->get('telefono'),
        'usuario' => $request->get('usuario'),
        'contraseña' => $request->get('contraseña'),
        'perfil' => $request->get('perfil'),
        'activo' => $request->get('estatus'),
        'owner' => $request->get('owner'),
        'fechaAlta' => $request->get('fechaAlta'),
        'fechaBaja' => $request->get('fechaBaja'),
    ]);
  //  $contact->assignRole('ingenieria');
    $contact->save();
    $perfil = $contact->perfil;
    $administrador = 'administrador';
    $ingenieria = 'ingenieria';
    $supervisor = 'supervisor';
    $tecnico = 'tecnico';

    if (($perfil == 'administrador'))
        {
          //  $contact->assignRole('administrador');
        }
        elseif (($perfil == 'ingenieria'))
        {
          /*  $user1 = Administrador::all();
            $user1->assignRole('admin');*/
        }
        elseif (($perfil == 'supervisor'))
        {
          //  $contact->assignRole('supervisor');
        }
        elseif (($perfil == 'tecnico'))
        {
          //  $contact->assignRole('tecnico');
        }
        elseif (($perfil == 'almacen'))
        {
          //  $contact->assignRole('almacen');
        }
        elseif (($perfil == 'compras'))
        {
          //  $contact->assignRole('compras');
        }
        elseif (($perfil == 'gesa'))
        {
          //  $contact->assignRole('gesa');
        }



    return redirect('/administrador')->with('Bien', 'Se ha guardado la OT');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      return 'vista ingeniería';
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
      $contact = Administrador::find($id);
      $contact->delete();
      return 'borrado';
      //return redirect('/contacts')->with('success', 'Contact deleted!');

  }


}
