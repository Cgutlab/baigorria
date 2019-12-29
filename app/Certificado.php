<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
  protected $table = "certificados";
  protected $fillable = [
    'titulo_es','titulo_en','titulo_br','ficha','orden','seccion'
  ];
    //
}
