<?php



namespace App\Http\Controllers\privada;



use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categoria;
use App\Metadato;
use App\Banner;
use App\Producto;
use App\Presentacion;
use App\Lista;
use App\Contenido;


class PrivadaController extends Controller
{
    public function privatezone(){
      $active = 'privatezone';
      $metadato   = Metadato::where('seccion', $active)->orderBy('orden', 'asc')->first();
      $banner     = Banner::where('seccion', $active)->orderBy('orden', 'asc')->first();
      $contenido  = Contenido::where('seccion', $active)->get();

      return view('privada.index', compact('active', 'metadato', 'banner', 'contenido'));
    }

    public function catalogos(){

      $active = 'catalogo';

      $metadato   = Metadato::where('seccion', $active)->orderBy('orden', 'asc')->first();

      $banner     = Banner::where('seccion', $active)->orderBy('orden', 'asc')->first();

      $categorias = Categoria::orderBy('orden', 'asc')->get();

      $productos = Producto::orderBy('orden', 'asc')->get();

      $presentacion = Presentacion::orderBy('orden', 'asc')->get();



      return view('privada.catalogos', compact('modelos','categorias','metadato', 'active', 'banner', 'productos', 'presentacion'));

    }



    public function catalogo(Request $request){

      $active = 'catalogo';

      $metadato   = Metadato::where('seccion', $active)->orderBy('orden', 'asc')->first();

      $banner     = Banner::where('seccion', $active)->orderBy('orden', 'asc')->first();


        $busqueda = $request->busqueda;

        $busca=1;

        $active = 'catalogo';

        $metadato = Metadato::where('seccion','buscar')->first();

        $banner   = Banner::orderBy('orden', 'asc')->where('seccion', $active)->first();

        $presentacion = Presentacion::with(['productos' => function($query) use ($busqueda){
          $query->orWhere('titulo_es', 'like', '%' . $busqueda . '%')
                ->orwhere('titulo_en', 'like', '%' . $busqueda . '%')
                ->orwhere('titulo_br', 'like', '%' . $busqueda . '%')
                ->orwhere('texto_es', 'like', '%' . $busqueda . '%')
                ->orwhere('texto_en', 'like', '%' . $busqueda . '%')
                ->orwhere('texto_br', 'like', '%' . $busqueda . '%');

        }])->where('titulo_es', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_en', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_br', 'like', '%' . $busqueda . '%')
          ->orwhere('codigo', 'like', '%' . $busqueda . '%')
          ->orwhere('marca', 'like', '%' . $busqueda . '%')
          ->orwhere('modelo', 'like', '%' . $busqueda . '%')
          ->orwhere('terminacion', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_es', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_en', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_br', 'like', '%' . $busqueda . '%')->get();


      return view('privada.catalogo', compact('categoriaIs', 'modelos','categorias','metadato', 'active', 'banner', 'productos', 'presentacion', 'busqueda'));

    }



    public function listadeprecios(){

      $active = 'listadeprecios';

      $metadato   = Metadato::where('seccion', $active)->orderBy('orden', 'asc')->first();

      $banner     = Banner::where('seccion', $active)->orderBy('orden', 'asc')->first();

      $lista     = Lista::orderBy('orden', 'asc')->get();





      return view('privada.listadeprecios', compact('active', 'metadato', 'banner', 'lista'));

    }


    public function buscador_privado(Request $request)

    {

        $busqueda = $request->busqueda;

        $busca=1;

        $active = 'catalogo';

        $metadato = Metadato::where('seccion','buscar')->first();

        $banner   = Banner::orderBy('orden', 'asc')->where('seccion', $active)->first();

        $presentacion = Presentacion::with(['productos' => function($query) use ($busqueda){
          $query->orWhere('titulo_es', 'like', '%' . $busqueda . '%')
                ->orwhere('titulo_en', 'like', '%' . $busqueda . '%')
                ->orwhere('titulo_br', 'like', '%' . $busqueda . '%')
                ->orwhere('texto_es', 'like', '%' . $busqueda . '%')
                ->orwhere('texto_en', 'like', '%' . $busqueda . '%')
                ->orwhere('texto_br', 'like', '%' . $busqueda . '%');

        }])->where('titulo_es', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_en', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_br', 'like', '%' . $busqueda . '%')
          ->orwhere('codigo', 'like', '%' . $busqueda . '%')
          ->orwhere('marca', 'like', '%' . $busqueda . '%')
          ->orwhere('modelo', 'like', '%' . $busqueda . '%')
          ->orwhere('terminacion', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_es', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_en', 'like', '%' . $busqueda . '%')
          ->orwhere('titulo_br', 'like', '%' . $busqueda . '%')->get();

        // $productos = Producto::where('titulo_es', 'like', '%' . $busqueda . '%')->orwhere('titulo_en', 'like', '%' . $busqueda . '%')->orwhere('titulo_br', 'like', '%' . $busqueda . '%')

        // ->orwhere('texto_es', 'like', '%' . $busqueda . '%')->orwhere('texto_en', 'like', '%' . $busqueda . '%')->orwhere('texto_br', 'like', '%' . $busqueda . '%')->get();



        // $presentacion = Presentacion::where('titulo_es', 'like', '%' . $busqueda . '%')->orwhere('codigo', 'like', '%' . $busqueda . '%')->orwhere('titulo_es', 'like', '%' . $busqueda . '%')->orwhere('titulo_en', 'like', '%' . $busqueda . '%')->orwhere('titulo_br', 'like', '%' . $busqueda . '%')

        // ->orwhere('marca', 'like', '%' . $busqueda . '%')->orwhere('modelo', 'like', '%' . $busqueda . '%')->orwhere('terminacion', 'like', '%' . $busqueda . '%')->get();



        return redirect('catalogo')->with('banner','productos','busqueda','busca','metadato','active','presentacion');

    }

}
