<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Sofa\Eloquence\Eloquence;


class Ot extends Model
{

  //use Eloquence;

  // default fields to search
//  protected $searchableColumns = ['title', 'body'];

  protected $fillable = [
      'numeroOt',
      'fechaAlta',
      'companiaSolicitaServicio',
      'tipoAeronave',
      'matricula',
      'modelo',
      'numeroSerie',
      'hangar',
      'ttMotor1',
      'ttMotor2',
      'numeroParteMotor1',
      'numeroParteMotor2',
      'numeroSerieMotor1',
      'numeroSerieMotor2',
      'numeroSeriePlaneador',
      'ttPlaneador',
      'ciclosTotales',
      'observaciones',
      'horasTrabajoEstimadas',
      'reporte',
      'fechaInicio',
      'origenReporte'
  ];

//Query Scope

  public function scopeName($query, $name)
  {
    if($name)
          return $query->where('numeroOt', 'LIKE', "%$name%");
  }

}
