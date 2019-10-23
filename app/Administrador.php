<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Administrador extends Model
{
  use HasRoles;
  
  protected $fillable = [
      'nombre',
      'correo',
      'telefono',
      'usuario',
      'contraseña',
      'perfil',
      'activo',
      'owner',
      'fechaAlta',
      'fechaBaja'
  ];
}
