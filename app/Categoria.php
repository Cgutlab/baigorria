<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table    = "categorias";
    protected $fillable = [
    	'imagen','titulo_es','titulo_en','titulo_br','orden'
    ];

    public function productos()
    {
        return $this->hasMany('App\Producto', 'id_producto');
    }
}
