<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
  protected $table = "banners";
  protected $fillable = [
    'imagen','titulo_es','texto_es','titulo_en','texto_en','titulo_br','texto_br','orden'
  ];
    //
}
