<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table    = "productos";
    protected $fillable = [
        'imagen','titulo_es','titulo_en','titulo_br','texto_es','texto_en','texto_br','plano','ficha','orden','id_categoria'
    ];

    public function categorias()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria');
    }

    public function presentaciones()
    {
        return $this->hasMany('App\Presentacion', 'id_producto');
    }
}
