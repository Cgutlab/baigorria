<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
  protected $table = "listas";
  protected $fillable = [
    'imagen','titulo_es','titulo_en','titulo_br','seccion','ficha','ruta','orden'
  ];
}
