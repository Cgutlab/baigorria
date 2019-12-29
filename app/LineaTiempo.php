<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaTiempo extends Model
{
  protected $table = "lineatiempos";
  protected $fillable = [
      'imagen','titulo_es','texto_es','titulo_en','texto_en','titulo_br','texto_br','ruta','orden'
  ];
}
