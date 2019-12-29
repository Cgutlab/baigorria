<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
  protected $table = "sliders";
  protected $fillable = [
		    'imagen','titulo_es','subtitulo_es','titulo_en','subtitulo_en','titulo_br','subtitulo_br','orden','seccion'
	];
}
