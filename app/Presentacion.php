<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    protected $table    = "presentaciones";
    protected $fillable = [
        	'codigo','titulo_es','titulo_en','titulo_br','oem','tipo','medida_a','medida_b','medida_c','medida_d','medida_e','medida_f','medida_g','marca','modelo','dureza','terminacion','imagen1','imagen2','imagen3','imagen4','ficha','orden','id_producto','precio','cantidadxcaja',
            'precio_a', 'precio_b', 'precio_c', 'precio_d', 'precio_e', 'precio_f'
    ];

    public function productos()
    {
        return $this->belongsTo('App\Producto', 'id_producto');
    }

    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido', 'pedido_presentacion', 'id_pedido', 'id_presentacion')->withPivot('cantidad', 'subtotal', 'iva', 'total', 'id_producto');
    }
}

/*
    public function pedidos()
    {
        return $this->belongsToMany('App\Pedido', 'pedido_producto')->withPivot('cantidad', 'costo');
    }
    public function cpedidos()
    {
        return $this->belongsToMany('App\Pedido', 'carrito_pedido_producto')->withPivot('cantidad', 'costo', 'pedir');
    }
*/
