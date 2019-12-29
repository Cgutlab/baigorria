<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
  protected $table = "articulos";
  protected $fillable = [
    'imagen','titulo_es','titulo_en','titulo_br','ruta','seccion','orden',
    'texto_es','texto_en','texto_br',
  ];
    //
}
