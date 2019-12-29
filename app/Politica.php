<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Politica extends Model
{
  protected $table = "politicas";
  protected $fillable = [
    'titulo_es','titulo_en','titulo_br','orden'
  ];
}
