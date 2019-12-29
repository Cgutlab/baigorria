<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenido extends Model
{
    protected $fillable = [
		    'imagen',
        'titulo_es','titulo_en','titulo_br',
        'subtitulo_es','subtitulo_en','subtitulo_br',
        'texto_es','texto_en','texto_br',
        'texto2_es','texto2_en','texto2_br',
        'ruta','seccion', 'orden'
	];
}
