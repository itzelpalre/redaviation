<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
  protected $fillable = [
      'nombre',
      'correo',
      'telefono',
      'usuario',
      'contraseña',
      'perfil',
      'activo',
      'owner'
  ];
}
