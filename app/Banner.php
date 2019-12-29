<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
  protected $table = "banners";
  protected $fillable = [
    'imagen','titulo_es','titulo_en','titulo_br','seccion','ruta','video','orden'
  ];
}
