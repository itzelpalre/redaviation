<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingenieria extends Model
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
