<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Red extends Model
{
    protected $table = "redes";
    protected $fillable = [
	  	'icono','imagen','titulo','orden','ruta','link'
	];
}
