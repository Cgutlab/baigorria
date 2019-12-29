<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacado extends Model
{
  protected $table = "destacados";
  protected $fillable = [
    'imagen','titulo_es','texto_es','titulo_en','texto_en','titulo_br','texto_br','orden','seccion', 'ruta'
  ];
    //
}
