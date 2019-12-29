<?php

namespace App\Http\Controllers\adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categoria;
use App\Producto;
use App\Presentacion;

use App\Exports\YourExport;
use App\Imports\YourImport;
use Maatwebsite\Excel\Excel;

class ExcelController extends Controller
{
    public function excelcat()
    {
        return view('adm.excel.carga', compact('categorias'));
    }

    public function importCat(Request $request)
    {
        ini_set('max_execution_time', 900); //no funciona
        \Excel::load($request->excel, function($reader) {
            $excel = $reader->get();
            $categoria_id = 0;
            $producto_id = 0;
            // iteracción
            $reader->each(function($row) use($categoria_id) {
                $presentacion = Presentacion::Find($row->codigo);

                if(!isset($presentacion)) {
                  $producto = Producto::where('titulo_es', 'like', '%' . $row->categoria_es . '%')->first();

                  if(!isset($producto)) {
                    $categoria = Categoria::where('titulo_es', 'like', '%' . $row->familia_es . '%')->first();

                    if(!isset($categoria)) {
                      //create categoria
                      $categoria = new Categoria;
                      $categoria->imagen       = $row->codigo.'.jpg';
                      $categoria->titulo_es    = $row->familia_es;
                      $categoria->titulo_en    = $row->familia_en;
                      $categoria->titulo_br    = $row->familia_br;
                      $categoria->orden        = $row->codigo;
                      $categoria->save();
                      $categoria_id = $categoria->id;
                      //create categoria
                    }else{
                      $categoria = Categoria::where('titulo_es', 'like', '%' . $row->familia_es . '%')->first();
                      $categoria_id = $categoria->id;
                      //update categoria
                    }

                    //create Producto
                    $producto = new Producto;
                    $producto->imagen     = $row->codigo.'.jpg';
                    $producto->titulo_es  = $row->categoria_es;
                    $producto->titulo_en  = $row->categoria_en;
                    $producto->titulo_br  = $row->categoria_br;
                    $producto->texto_es   = $row->texto_es;
                    $producto->texto_en   = $row->texto_en;
                    $producto->texto_br   = $row->texto_br;
                    $producto->id_categoria= $categoria_id;
                    $producto->save();
                    $producto_id = $producto->id;
                    //create Producto
                  }else{
                    $producto = Producto::where('titulo_es', 'like', '%' . $row->categoria_es . '%')->first();
                    $producto_id = $producto->id;
                      //update Producto
                  }
                  //create Presentacion
                  $item = new Presentacion;
                  $item->codigo       = $row->codigo;
                  $item->titulo_es    = $row->descripcion_es;
                  $item->titulo_en    = $row->descripcion_en;
                  $item->titulo_br    = $row->descripcion_br;
                  $item->oem          = $row->oem;
                  $item->tipo         = $row->tipo;
                  $item->medida_a     = $row->a;
                  $item->medida_b     = $row->b;
                  $item->medida_c     = $row->c;
                  $item->medida_d     = $row->d;
                  $item->medida_e     = $row->e;
                  $item->medida_f     = $row->f;
                  $item->medida_g     = $row->g;
                  $item->marca        = $row->marca;
                  $item->modelo       = $row->modelo;
                  $item->dureza       = $row->dureza;
                  $item->terminacion  = $row->terminacion;
                  $item->cantidadxcaja= $row->cantidadxcaja;
                  $item->orden        = $row->orden;
                  $item->imagen1      = $row->codigo.'_1.jpg';
                  $item->imagen2      = $row->codigo.'_2.jpg';
                  $item->imagen3      = $row->codigo.'_3.jpg';
                  $item->imagen4      = $row->codigo.'_4.jpg';
                  $item->precio_a     = $row->precio_a;
                  $item->precio_b     = $row->precio_b;
                  $item->precio_c     = $row->precio_c;
                  $item->precio_d     = $row->precio_d;
                  $item->precio_e     = $row->precio_e;
                  $item->precio_f     = $row->precio_f;
                  $item->id_producto  = $producto_id;
                  //create Presentacion
                }else{
                  //update Presentacion
                  $item->codigo       = $row->codigo;
                  $item->titulo_es    = $row->titulo_es;
                  $item->titulo_en    = $row->titulo_en;
                  $item->titulo_br    = $row->titulo_br;
                  $item->oem          = $row->oem;
                  $item->tipo         = $row->tipo;
                  $item->medida_a     = $row->a;
                  $item->medida_b     = $row->b;
                  $item->medida_c     = $row->c;
                  $item->medida_d     = $row->d;
                  $item->medida_e     = $row->e;
                  $item->medida_f     = $row->f;
                  $item->medida_g     = $row->g;
                  $item->marca        = $row->marca;
                  $item->modelo       = $row->modelo;
                  $item->dureza       = $row->dureza;
                  $item->terminacion  = $row->terminacion;
                  $item->cantidadxcaja= $row->cantidadxcaja;
                  $item->orden        = $row->orden;
                  $item->imagen1      = $row->codigo.'_1.jpg';
                  $item->imagen2      = $row->codigo.'_2.jpg';
                  $item->imagen3      = $row->codigo.'_3.jpg';
                  $item->imagen4      = $row->codigo.'_4.jpg';
                  $item->precio_a     = $row->precio_a;
                  $item->precio_b     = $row->precio_b;
                  $item->precio_c     = $row->precio_c;
                  $item->precio_d     = $row->precio_d;
                  $item->precio_e     = $row->precio_e;
                  $item->precio_f     = $row->precio_f;
                  $item->update();
                  //update Presentacion
                }
            });
        });

        $success = 'Excel Importado Correctamente';

        return back()->with('success', $success);
    }
}
