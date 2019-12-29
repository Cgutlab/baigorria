<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Destacado;

use App\Contenido;

use App\Slider;

use App\Red;

use App\Metadato;

use App\Actividad;

use App\Video;

use App\iCabana;

use App\Banner;

use App\iGaleria;

use App\vCategoria;

use App\Certificado;

use App\vGaleria;

use App\Icon;

use App\Categoria;

use App\Producto;

use App\Presentacion;

use App\Articulo;



use Khill\Lavacharts\Lavacharts;

use App\Visitor;



class FrontendController extends Controller

{

    public function home()

    {

      $active='home';

    	$c1          = Contenido::where('id', 1)->first();

    	$c2          = Contenido::where('id', 5)->first();

    	$c3          = Contenido::where('id', 6)->first();

      $metadato    = Metadato::where('seccion', $active)->first();

      $sliders     = Slider::where('seccion', $active)->orderBy('orden','asc')->get();

      $destacados  = Destacado::orderBy('orden', 'asc')->where('seccion', $active)->get();

      $iconos      = Icon::orderBy('orden', 'asc')->get();

      $banner      = Banner::orderBy('orden', 'asc')->where('seccion', $active)->first();



      return view('page.'.$active, compact('metadato','sliders','c1','c2','c3', 'active', 'destacados', 'iconos', 'contenido', 'banner'));

    }



    public function categorias()

    {

      $active = 'productos';



      $metadato = Metadato::where('seccion', $active)->first();

      $contenido = Contenido::where('seccion', $active)->first();

      $categorias = Categoria::orderBy('orden', 'asc')->get();

      //$sliders   = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();

      //$cabanas   = iCabana::orderBy('orden', 'asc')->get();



      return view('page.categorias', compact('contenido', 'metadato', 'active', 'sliders', 'imagenes', 'categorias'));

    }



    public function productos($id)

    {

      $active = 'productos';

      $item = Producto::where('id', $id)->first();

      $metadato = Metadato::where('seccion', $active)->first();

      $contenido = Contenido::where('seccion', $active)->first();

      $categorias = Categoria::orderBy('orden', 'asc')->get();

      $productos  = Producto::orderBy('orden', 'asc')->get();

      $product    = Producto::where('id_categoria', $id)->orderBy('orden', 'asc')->get();

      //$sliders   = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();

      //$cabanas   = iCabana::orderBy('orden', 'asc')->get();



      return view('page.productos', compact('contenido', 'metadato', 'active', 'sliders', 'imagenes', 'categorias', 'productos', 'product', 'item'));

    }



    public function producto($id)

    {

      $active = 'productos';



      $metadato = Metadato::where('seccion', $active)->first();

      $contenido = Contenido::where('seccion', $active)->first();

      $categorias = Categoria::orderBy('orden', 'asc')->get();

      $productos  = Producto::orderBy('orden', 'asc')->get();



      $productoIs  = Producto::where('id', $id)->first();

      $presentacion = Presentacion::where('id_producto', $id)->get();

      $cont = '';

      //$sliders   = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();

      //$cabanas   = iCabana::orderBy('orden', 'asc')->get();



      return view('page.producto', compact('contenido', 'metadato', 'active', 'sliders', 'imagenes', 'categorias', 'productos', 'presentacion', 'productoIs', 'cont'));

    }





    public function exportacion()

    {

      $active = 'exportacion';

      $metadato = Metadato::where('seccion', $active)->first();

      $contenido = Contenido::where('seccion', $active)->first();

      $banner    = Banner::orderBy('orden', 'asc')->where('seccion', $active)->first();







         $lava = new Lavacharts;

         $popularity = $lava->DataTable();

         // $data = Visitor::where('users', '>', '0')->select("country as 0", "users as 1")->get()->toArray();
         // ->addNumberColumn("users")

         $data = Visitor::where('users', '>', '0')->select("country as 0")->get()->toArray();
         $popularity->addStringColumn("Country")
                     ->addRows($data);

         $lava->GeoChart("Popularity", $popularity);

      return view('page.'.$active, compact('lava', 'contenido', 'contenido2', 'metadato', 'active', 'sliders', 'imagenes', 'banner', 'destacado1', 'destacado2', 'destacado3', 'destacado4'));

    }





    public function calidad()

    {

      $active = 'calidad';

      $metadato = Metadato::where('seccion', $active)->first();

      $contenido1 = Contenido::where('seccion', $active)->where('orden', 'AA')->first();

      $contenido2 = Contenido::where('seccion', $active)->where('orden', 'BB')->first();



      $banner     = Banner::orderBy('orden', 'asc')->where('seccion', $active)->first();



      $destacado1 = Destacado::where('orden', 'AA')->where('seccion', $active)->first();

      $destacado2 = Destacado::where('orden', 'BB')->where('seccion', $active)->first();

      $destacado3 = Destacado::where('orden', 'CC')->where('seccion', $active)->first();

      $destacado4 = Destacado::where('orden', 'DD')->where('seccion', $active)->first();



      $certificado = Certificado::orderBy('orden', 'asc')->where('seccion', $active)->get();

      $articulo    = Articulo::orderBy('orden', 'asc')->where('seccion', $active)->get();

      $cont = '';

      return view('page.'.$active, compact('cont', 'contenido1', 'contenido2', 'articulo', 'metadato', 'active', 'sliders', 'imagenes', 'banner', 'destacado1', 'destacado2', 'destacado3', 'destacado4', 'certificado'));

    }





    public function registro()

    {

      $active = 'registro';

      $metadato = Metadato::where('seccion', $active)->first();



      return view('page.'.$active, compact('metadato', 'active'));

    }



    public function buscar()

    {

        $busca=0;

        $active = 'busca';

        $metadato = Metadato::where('seccion','buscar')->first();

        $banner   = Banner::orderBy('orden', 'asc')->where('seccion', $active)->first();

        return view('page.buscar', compact('metadato','active','busca', 'banner'));

    }



    public function buscador(Request $request)

    {

        $busqueda = $request->busqueda;

        $busca=1;

        $active = 'busca';

        $metadato = Metadato::where('seccion','buscar')->first();

        $banner   = Banner::orderBy('orden', 'asc')->where('seccion', $active)->first();

        $productos = Producto::where('titulo_es', 'like', '%' . $busqueda . '%')->orwhere('titulo_en', 'like', '%' . $busqueda . '%')->orwhere('titulo_br', 'like', '%' . $busqueda . '%')

        ->orwhere('texto_es', 'like', '%' . $busqueda . '%')->orwhere('texto_en', 'like', '%' . $busqueda . '%')->orwhere('texto_br', 'like', '%' . $busqueda . '%')->get();



        $presentacion = Presentacion::where('titulo_es', 'like', '%' . $busqueda . '%')->orwhere('titulo_en', 'like', '%' . $busqueda . '%')->orwhere('titulo_br', 'like', '%' . $busqueda . '%')

        ->orwhere('marca', 'like', '%' . $busqueda . '%')->orwhere('modelo', 'like', '%' . $busqueda . '%')->orwhere('terminacion', 'like', '%' . $busqueda . '%')->get();



        return view('page.buscar', compact('banner','productos','busqueda','busca','metadato','active','presentacion'));

    }











    public function cabanas()

    {

      $active = 'cabanas';

      $metadato = Metadato::where('seccion', $active)->first();

      $contenido = Contenido::where('seccion', $active)->first();

      $sliders   = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();

      $cabanas   = iCabana::orderBy('orden', 'asc')->get();



      return view('page.'.$active, compact('contenido', 'metadato', 'active', 'sliders', 'imagenes', 'cabanas'));

    }



    public function cabana($id)

    {

      $active = 'cabanas';

      $metadato = Metadato::where('seccion', $active)->first();

      $contenido = Contenido::where('seccion', $active)->first();

      $sliders   = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();

      $cabana     = iCabana::where('id', $id)->first();

      $imagenes   = iGaleria::orderBy('orden', 'asc')->where('id_cabana', $id)->get();



      return view('page.cabana', compact('contenido', 'metadato', 'active', 'sliders', 'imagenes', 'proyecto', 'cabana'));

    }







    public function servicios()

    {



      $active = 'servicios';



      $contenido    = Contenido::where('seccion', $active)->first();



      $actividades  = Actividad::orderBy('orden', 'asc')->get();



      $sliders      = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();



      $metadato     = Metadato::where('seccion', $active)->first();



      return view('page.'.$active, compact('contenido','actividades','metadato', 'active', 'sliders'));



    }











    public function videos()



    {



      $active = 'videos';



      $metadato   = Metadato::where('seccion', $active)->first();



      $contenido  = Contenido::where('seccion', $active)->first();



      $sliders    = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();



      $videos     = Video::orderBy('orden', 'asc')->get();



      return view('page.'.$active, compact('contenido', 'metadato', 'active', 'sliders', 'videos'));



    }











    public function galerias()



    {



      $active = 'galerias';



      $metadato   = Metadato::where('seccion', $active)->first();



      $contenido  = Contenido::where('seccion', $active)->first();



      $sliders    = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();



      $incrementa = '0';



      $categorias = vCategoria::orderBy('orden', 'asc')->get();



      $galeria = vGaleria::orderBy('orden', 'asc')->get();







      return view('page.'.$active, compact('contenido', 'metadato', 'active', 'sliders', 'categorias', 'incrementa', 'galeria'));



    }











    public function empresa()



    {



      $active = 'donde-estamos';



      $metadato = Metadato::where('seccion', $active)->first();



      $contenido = Contenido::where('seccion', $active)->first();



      $sliders   = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();



      return view('page.'.$active, compact('contenido', 'metadato', 'active', 'sliders'));



    }











    public function contacto()



    {



      $active = 'contacto';



      $metadato = Metadato::where('seccion', $active)->first();



      $contenido = Contenido::where('seccion', $active)->first();



      $terminos  = Contenido::where('seccion', 'condiciones')->first();



      $sliders   = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();



      return view('page.'.$active, compact('contenido', 'metadato', 'active', 'sliders','frm_desde','frm_hasta','frm_cabanas','frm_pasajeros', 'cabanas', 'terminos'));



    }











    public function llenarformulario(Request $request)



    {



      $active = 'contacto';



      $metadato = Metadato::where('seccion', $active)->first();



      $contenido = Contenido::where('seccion', $active)->first();



      $sliders   = Slider::orderBy('orden', 'asc')->where('seccion', $active)->get();







      $desde = $request->input('desde');



      $hasta = $request->input('hasta');



      $cabanas = $request->input('cabanas');



      $pasajeros = $request->input('pasajeros');







      return view('page.contacto', compact('contenido', 'metadato', 'active', 'sliders', 'desde', 'hasta', 'cabanas', 'pasajeros'));



    }



}
