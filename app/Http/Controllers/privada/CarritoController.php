<?php



namespace App\Http\Controllers\privada;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



use App\Catalogo;

use App\Categoria;

use App\Dato;

use App\Descuento;

use App\Pedido;

use App\Metadato;

use App\Producto;

use App\Presentacion;

use App\Oferta;

use App\Banner;

use App\Novedad;

use App\Marca;

use App\Modelo;

use Carbon\Carbon;

use Gloudemans\Shoppingcart\Facades\Cart;

use Illuminate\Support\Facades\Mail;



class CarritoController extends Controller

{



    public function update(Request $request)

    {

        $activo    = 'catalogo';

        $carrito   = Cart::content();

        $items     = $carrito->all();

        $ready     = 0;

        $config    = 4;

        $im        = 0;

        $shop      = 0;

        $total_items = 0;

        $presentaciones = Presentacion::orderBy('orden', 'asc')->get();

        $presentacion = Presentacion::find($request->id);



        if($items > 0){

            foreach($items as $row){

                Cart::update($request->id_row_carrito, ['qty' => $request->cantidad]);

            }

        }else{

          return back();

        }

        return redirect()->back()->with(compact('carrito', 'qty', 'name', 'id', 'price', 'options'));

    }













    public function add(Request $request)

    {

        $activo    = 'catalogo';

        $carrito   = Cart::content();

        $items     = $carrito->all();

        if($request->id_carrito){

            Cart::update($request->id_carrito, ['qty' => $request->cantidad, 'price' => $request->id_precio]);

        }elseif($request->cantidad > 0){

          $ico = Presentacion::find($request->id_presentacion);

          Cart::add(['id' => $ico->id,

                      'name' => $ico->codigo,

                      'qty' => $request->cantidad,

                      'price' => $request->id_precio,

                      'options' => [

                        'imagen1' => $ico->imagen1,

                        'imagen' => $ico->productos->imagen,

                        'imagen1' => $ico->imagen1,

                        'imagen2' => $ico->imagen2,

                        'imagen3' => $ico->imagen3,

                        'imagen4' => $ico->imagen4,

                        'oem' => $ico->oem,

                        'tipo' => $ico->tipo,

                        'marca' => $ico->marca,

                        'modelo' => $ico->modelo,

                        'dureza' => $ico->dureza,

                        'terminacion' => $ico->terminacion,

                        'cantidadxcaja' => $ico->cantidadxcaja,

                        'ficha' => $ico->ficha,

                        'orden' => $ico->orden,

                        'titulo_es' => $ico->productos->titulo_es,

                        'titulo_en' => $ico->productos->titulo_en,

                        'titulo_br' => $ico->productos->titulo_br,

                          'a' => $ico->medida_a,

                          'b' => $ico->medida_b,

                          'c' => $ico->medida_c,

                          'd' => $ico->medida_d,

                          'e' => $ico->medida_e,

                          'f' => $ico->medida_f,

                          'g' => $ico->medida_g,

                        'subtotal' => ($request->id_precio * $request->cantidad),

                        'total' => ($request->id_precio * $request->cantidad)

                      ] ]);

        }else{

          $success = 'Por favor, ¡Verifique los datos e intente nuevamente!';

          return redirect()->back()->with(compact('success'));

        }

        return redirect()->back()->with(compact('carrito', 'qty', 'name', 'id', 'price', 'options', 'presentacion'));







        die();



        if($items->id == $request->id){

          foreach($items as $row){

              if($row->id == $request->id){

                $var = 'create';

              }else{

                $var = 'update';

              }

          }

        }



        @dd($var);



        if (count($carrito) > 0) {

            if($request->id_carrito) {

                Cart::update($request->id_carrito, ['qty' => $request->cantidad]);



            }elseif($request->id){

              Cart::add(['id' => $presentacion->id,

                          'name' => $presentacion->codigo,

                          'qty' => $request->cantidad,

                          'price' => $presentacion->precio,

                          'options' => [

                            'imagen1' => $presentacion->imagen1,

                            'imagen' => $presentacion->productos->imagen,

                            'subtotal' => ($presentacion->precio * $request->cantidad),

                            'total' => ($presentacion->precio * $request->cantidad)

                          ] ]);



        }}else{



            $presentacion = Presentacion::find($request->id);

            Cart::add(['id' => $presentacion->id,

                        'name' => $presentacion->codigo,

                        'qty' => $request->cantidad,

                        'price' => $presentacion->precio,

                        'options' => [

                          'imagen1' => $presentacion->imagen1,

                          'imagen' => $presentacion->productos->imagen,

                          'subtotal' => ($presentacion->precio * $request->cantidad),

                          'total' => ($presentacion->precio * $request->cantidad),

                        ]]);

        }

        return redirect()->route('catalogos', compact('carrito', 'qty', 'name'));























        die();

        if($request->id_carrito != null)

        {

            if (count($carrito) > 0)

            {

                Cart::update($request->id_carrito, ['qty' => $request->cantidad]);

            }

        }

        elseif($request->id)

        {

          $presentacion = Presentacion::find($request->id);



          Cart::add(['id' => $presentacion->id,

                      'name' => $presentacion->codigo,

                      'qty' => $request->cantidad,

                      'price' => $presentacion->precio,

                      'options' => [

                        'precio' => $presentacion->precio,

                        'subtotal' => ($presentacion->precio * $request->cantidad),

                        'total' => ($presentacion->precio * $request->cantidad)

                      ]]);

        }

        return redirect()->route('catalogos', compact('id_presenta', 'id_carrito', 'presentaciones', 'active', 'modelo', 'metadatos','descuento', 'shop', 'medida', 'carrito', 'activo', 'productos', 'ready', 'prod', 'config', 'items', 'codigo', 'desc', 'iva'));



        if(isset($request->qty))

        {

        foreach($request->qty as $key => $item)

        {

            if($request->qty[$key] > 0)

            {

                $modelo = Presentacion::find($request->id[$key]);

                $precio = $modelo->precio_sin_iva;

                $coniva = $modelo->precio_con_iva;



                $subtotal = $request->qty[$key] * $modelo->precio_sin_iva;



                $total = $request->qty[$key] * $modelo->precio_con_iva;



                $ivap = $modelo->iva;



                // $total = $request->qty[$key] * $modelo->precio_con_iva;

                Cart::add(['id' => $modelo->id, 'name' => $modelo->codigo, 'qty' => $request->qty[$key], 'price' => $precio, 'options' => ['precio' => $precio, 'subtotal' => $subtotal, 'total' => $total, 'precioconiva' => $coniva, 'ivap' => '$ivap', 'titulo' => $modelo->titulo, 'coniva' => $modelo->coniva]]);

            }

        }



        return redirect()->route('carrito', compact('active', 'modelo', 'metadatos','descuento', 'shop', 'medida', 'carrito', 'activo', 'productos', 'ready', 'prod', 'config', 'items', 'codigo', 'desc', 'iva'));

        }else{

            return back();

        }

    }





    public function actual(Request $request){

      $activo    = 'catalogo';

      $carrito   = Cart::content();

      $items     = $carrito->all();

      $ready     = 0;

      $config    = 4;

      $im        = 0;

      $shop      = 0;

      $total_items = 0;

      $presentaciones = Presentacion::orderBy('orden', 'asc')->get();

      $presentacion = Presentacion::find($request->id);



      if (count($carrito) > 0) {

          if($request->id_carrito) {

              Cart::update($request->id_carrito, ['qty' => $request->cantidad]);

          }

      }



      return redirect()->route('carrito', compact('id_presenta', 'id_carrito', 'presentaciones', 'active', 'modelo', 'metadatos','descuento', 'shop', 'medida', 'carrito', 'activo', 'productos', 'ready', 'prod', 'config', 'items', 'codigo', 'desc', 'iva'));

    }





    public function carrito(Request $request)

    {



        $active = 'carrito';

        $metadato = Metadato::where('seccion', $active)->first();

        $banner = Banner::where('seccion', $active)->first();

        $categorias = Categoria::orderBy('orden', 'asc')->get();

        $activo = 'catalogo';

        $presentaciones = Presentacion::orderBy('orden', 'asc')->get();



        $total_items = 0;

        $subtotal    = Cart::Subtotal();

        $total       = Cart::Total();

        $carrito     = Cart::content();

        $total      = str_replace(',', '', $total);

        $subtotal   = str_replace(',', '', $subtotal);

        $diferencia = null;

        $id_desc = 0;

        $descuento_item = 0;

        $descuento_total = 0;

        $desc = 0;

        $total_iva = 0;





        if (count($carrito)>0) {

            # code...

        foreach (Cart::content() as $row) {

                $subtotal = $total_items + $row->qty;

                $total_items = $total_items + $row->options->precioconiva;



            $calcular_iva = $row->options->precioconiva * $row->qty;

            //$iva = $row->options->precioconiva;

            $iva = ($row->price * $row->options->coniva);

            /*$total_iva = $row->options->precioconiva;*/

            //$total = $request->qty * $row->precioconiva;

        }

//dd($desc);

//descuento en pesos

        //$descuento = $descuento_total;

//iva



        //$subtotal_desc = $subtotal-$descuento;

        //$constante = 21/100;



        $totales = ($subtotal);

        //$descuento = $total;



        }

        return view('privada.carrito', compact('presentaciones', 'categorias', 'active', 'metadato', 'calcular_iva','total_iva','banner', 'activo', 'constante','desc', 'descuento', 'iva', 'totales', 'descuentos', 'diferencia', 'proximo'));

    }



    public function send(Request $request)

    {

        $fecha       = Carbon::now()->format('Y-m-d H:m:s');

        $activo      = 'carrito';

        $total_items = 0;

        $dato        = Dato::where('tipo', 'correo')->first();

        $subtotal    = Cart::Subtotal();

        $total       = Cart::Total();

        $carrito     = Cart::content();

        $total_iva = 0;

        $desc = 0;

        $id_desc = null;



        $pedido               = new Pedido;

        $pedido->subtotal     = $request->subtotal;

        $pedido->iva          = $request->iva;

        $pedido->total        = $request->total;

        $pedido->save();



        foreach (Cart::content() as $row) {

            $producto = $row->name;

            $cantidad = $row->qty;

            $precio   = $row->price;

            $costo = $row->price * $row->qty;

            $r_iva = $row->options->iva/100;

            $total_ivap = $costo*$r_iva;

            $total_costo = $total_ivap + $costo;

            //$idproducto = $row->rowId

            $marca    = $row->options->marca;

            $modelo   = $row->options->modelo;

            $dureza   = $row->options->dureza;

            $terminacion    = $row->options->terminacion;

            $total_items = $total_items + $row->qty;

            $unidades = $row->options->cantidadxcaja * $row->qty;

            $subtotalx = $precio * $unidades;

            $pedido->presentaciones()->attach($producto, [  'cantidad' => $row->qty,

                                                            'subtotal' => $subtotalx,

                                                            'iva' => ($subtotalx * 0.21),

                                                            'total' => ($subtotalx * 1.21),

                                                            'id_pedido' => $pedido->id,

                                                            'id_presentacion' => $row->id,

                                                            'created_at' => $fecha,

                                                          ]);

        }



        $carrito = Cart::content();

        $items   = $carrito->all();





        $mensaje = $request->mensaje;

        // dd($request->total);

        $nombre       = Auth()->user()->first_name;

        $apellido     = Auth()->user()->last_name;

        $emailcliente = Auth()->user()->email;

        $telefono     = Auth()->user()->phone;

        $direccion    = Auth()->user()->address;



        //dd($descuento);

        Mail::send('privada.mailpedido', ['marca'=>$marca, 'modelo' => $modelo, 'terminacion' => $terminacion, 'total' => $pedido->total, 'nombre' => $nombre, 'apellido' => $apellido, 'telefono' => $telefono, 'direccion' => $direccion, 'emailcliente' => $emailcliente, 'items' => $items, 'row' => $row, 'subtotal' => $pedido->subtotal, 'mensaje' => $mensaje, 'iva' => $pedido->iva], function ($message) use ($nombre, $apellido) {



            $dato = Dato::where('tipo', 'correo')->first();

            $message->from('info@baigorria.com', 'WEB | Pedidos');

            $message->to($dato->texto);

            //$message->to('cgutlab@gmail.com');



            //Add a subject

            $message->subject('Pedido de ' . $nombre . ' ' . $apellido);



        });

        if (count(Mail::failures()) > 0) {

            $failed = 'Ha ocurrido un error al enviar el correo';

        } else {

            $success = 'Pedido enviado correctamente';

        }



        Cart::destroy();

    return redirect()->route('carrito');

     //   return view('privada.carrito', compact('activo', 'success'));



    }



    public function delete($id)

    {

        $activo = 'catalogo';

        Cart::remove($id);

        return redirect()->route('carrito');

    }



    public function precios()

    {

        $activo   = 'catalogo';

        //$banner = Banner::Where('seccion', 'lista')->first();

        $catalogo = Catalogo::orderBy('created_at', 'ASC')->first();



        return view('privada.precios', compact('banner', 'activo', 'catalogo'));

    }



    public function destroy(){

      Cart::destroy();

      return back();

    }



    public function downloadPdf2($id)

    {

        $catalogo = Catalogo::find($id);

        $path     = public_path();

        $url      = $path . '/' . $catalogo->pdf;

        return response()->download($url);

        return redirect()->route('catalogos.index');

    }



    public function ofertas()

    {

        $activo    = 'zonaprivada-ofertas';



        $productos = Producto::OrderBy('orden', 'ASC')->where('id_oferta', '<>', '1')->where('id_oferta', '<>', '')->get();

        $ofertas   = Oferta::OrderBy('orden', 'ASC')->get();

        $ready     = 0;



        return view('privada.pedidos.ofertas', compact('productos', 'activo', 'ready', 'banner', 'ofertas'));

    }



    public function novedades()

    {

        $activo    = 'catalogo';

        $novedades = Novedad::OrderBy('orden', 'ASC')->get();

        $ready     = 0;

        return view('privada.pedidos.novedades', compact('novedades', 'activo', 'ready', 'banner'));

    }















    // public function catalogo()

    // {

    //     $activo    = 'catalogo';

    //     $family1 = Categoria::OrderBy('orden', 'ASC')->where('id', '0')->first();

    //     $family2 = Categoria::OrderBy('orden', 'ASC')->where('id', '21')->first();

    //     $family3 = Categoria::OrderBy('orden', 'ASC')->where('id', '26')->first();

    //     $family4 = Categoria::OrderBy('orden', 'ASC')->where('id', '27')->first();

    //     $ready     = 0;

    //     return view('privada.pedidos.catalogos', compact('family1','family2','family3','family4', 'activo', 'ready', 'banner'));

    // }



    public function familia($seccion)

    {

    /* MANUAL DE PAGINA WEB

    Querido programador

    Suerte

    */



        $all0_categorias = Categoria::orderBy('orden','asc')->where('seccion', $seccion)->get();

        $all1_categorias = Categoria::orderBy('orden','asc')->where('seccion', $seccion)->get();

        $all2_categorias = Categoria::orderBy('orden','asc')->where('seccion', $seccion)->get();

        $all3_categorias = Categoria::orderBy('orden','asc')->where('seccion', $seccion)->get();

        $all4_categorias = Categoria::orderBy('orden','asc')->where('seccion', $seccion)->get();

        $all5_categorias = Categoria::orderBy('orden','asc')->where('seccion', $seccion)->get();

        $all_productos = Producto::orderBy('orden','asc')->get();



        $categorias = Categoria::where('nivel', '1')->where('seccion', $seccion)->paginate(9);



        $selec_categorias = Categoria::where('nivel', '1')->where('seccion', $seccion)->orderBy('orden','asc')->get();



      $marcas = Marca::orderBy('orden','asc')->get();



      $variable = '0';



        $active='productos';

        $activo=$seccion;



        $contador = 0;



        $seccion = $seccion;



        return view('privatex.fam'.$seccion, compact('seccion','activo','variable','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos','categorias','selec_categorias','marcas','active'));



    }



    public function categoria($id)

    {



        $variable = $id;

        $all0_categorias = Categoria::orderBy('orden','asc')->get();

        $all1_categorias = Categoria::orderBy('orden','asc')->get();

        $all2_categorias = Categoria::orderBy('orden','asc')->get();

        $all3_categorias = Categoria::orderBy('orden','asc')->get();

        $all4_categorias = Categoria::orderBy('orden','asc')->get();

        $all5_categorias = Categoria::orderBy('orden','asc')->get();

        $all_productos = Producto::orderBy('orden','asc')->get();

        $interruptor = 0;

        $desactiva = 0;



        $all_categorias = Categoria::all();



        $all1_active = Categoria::find($id)->first();

        $all2_active = Categoria::find($all1_active->id)->first();

        $all3_active = Categoria::find($all2_active->id)->first();

        $all4_active = Categoria::find($all3_active->id)->first();

        $all5_active = Categoria::find($all4_active->id)->first();



        $imagenes = '';

        $activar = $id;



        $categorias = Categoria::where('id_padre', $id)->orderBy('orden','asc')->paginate(9);

        $productos = Producto::where('id_categoria', $id)->orderBy('orden','asc')->paginate(9);

        //$galerias = Galeria::orderBy('orden', 'asc')->get();



        $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();

        $marcas = Marca::orderBy('orden','asc')->get();





        $catx = Categoria::where('id_padre', $variable)->orderBy('orden','asc')->first();

        $caty = Categoria::where('id', $variable)->orderBy('orden','asc')->first();

        if($catx){

        $seccion = $catx->seccion;

        }else{

        $seccion = $caty->seccion;

        }

        $activo=$seccion;

        $active='productos';



        $contador = 0;



        return view('privatex.cat'.$seccion, compact('seccion','activo','imagenes','galerias','productos','all_categorias','interruptor','desactiva','all1_active','all2_active','all3_active','all4_active','all5_active','activar','variable','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos','categorias','selec_categorias','marcas','active'));

    }



/*

    public function products($id)

    {

       $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();

               $categorias = Categoria::orderBy('orden','asc')->get();



        $productos = Producto::where('id_categoria',$id)->orderBy('orden','asc')->paginate(9);

        //$galerias = Galeria::orderBy('orden','asc')->get();

        $marcas = Marca::orderBy('orden','asc')->get();

        $active='productos';

        $contador = 0;

        return view('privatex.productos', compact('marcas','galerias','productos','active', 'categorias'));

    }

*/



    public function product($id)



    {

        $p     = Producto::find($id);

        $categoria = Categoria::find($p->id_categoria);

        $ready         = 0;

        $relacionados  = Producto::OrderBy('orden', 'ASC')->Where('id_categoria', $p->id_categoria)->get();

        $activo        = 'productos';

        $productos     = Producto::OrderBy('id_categoria', 'ASC')->get();





        $all0_categorias = Categoria::orderBy('orden','asc')->get();

        $all1_categorias = Categoria::orderBy('orden','asc')->get();

        $all2_categorias = Categoria::orderBy('orden','asc')->get();

        $all3_categorias = Categoria::orderBy('orden','asc')->get();

        $all4_categorias = Categoria::orderBy('orden','asc')->get();

        $all5_categorias = Categoria::orderBy('orden','asc')->get();

        $all_productos = Producto::orderBy('orden','asc')->get();





        $categorys = Categoria::where('id',$id)->get();



        $productos = Producto::orderBy('orden', 'asc')->get();



        $productoIs = Producto::where('id',$id)->orderBy('orden', 'asc')->first();



        //$galerias = Galeria::where('id_producto',$id)->orderBy('orden', 'asc')->get();







        $marcas = Marca::orderBy('orden', 'asc')->get();



        $variable = Producto::orderBy('orden','asc')->first();

        $variable = $productoIs->id_categoria;



        $presentaciones = Presentacion::orderBy('codigo', 'asc')->where('id_producto', $id)->get();



        //$tallas = Talla::orderBy('orden', 'asc')->get();



        $productosRelacionados = Producto::where('id_categoria', $variable)->get();



        $active='productos';



        $cont=0;



        $caty = Categoria::where('id', $variable)->orderBy('orden','asc')->first();

        $seccion = $caty->seccion;

        $activo=$seccion;



        return view('privatex.producto'.$seccion, compact('productosRelacionados','seccion','activo','variable','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos',  'marcas','presentaciones','productoIs','galerias','tallas','active','categorys','productos','cont'));



    }

}
