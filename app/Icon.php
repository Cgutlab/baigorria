<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
  protected $table = "iconos";
  protected $fillable = [
    'imagen','titulo_es','titulo_en','titulo_br','seccion','orden','ruta'
  ];
}
