<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
  protected $table = "visitors";
  protected $fillable = [
    'users', 'country', 'titulo_es', 'titulo_en', 'titulo_br'
  ];
    //
}
