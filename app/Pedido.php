<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table    = "pedidos";
    protected $fillable = [
        'fecha','iva','subtotal','total','id_usuario'
    ];

    public function usuarios()
    {
        return $this->belongsTo('App\User', 'id', 'id_usuario');
    }

    public function presentaciones()
    {
        return $this->belongsToMany('App\Presentacion', 'pedido_presentacion', 'id_pedido', 'id_presentacion')->withPivot('cantidad', 'subtotal', 'iva', 'total', 'presentacion');
    }

    public function getfechaAttribute($date)
    {
        return $date = \Carbon\Carbon::parse($date)->format('d · m · y');
    }

    public function setfechaAttribute($date)
    {
        $this->attributes['fecha'] = \Carbon\Carbon::parse($date)->format('Y-m-d');
    }
}
