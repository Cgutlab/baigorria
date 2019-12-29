<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
  protected $table = "actividades";
  protected $fillable = [
    'imagen','titulo_es','titulo_en','titulo_br','ruta','seccion','orden'
  ];
    //
}
