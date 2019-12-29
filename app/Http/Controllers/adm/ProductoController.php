<?php



namespace App\Http\Controllers\adm;



use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\ProductosRequest;

use Illuminate\Http\Request;

use App\Extensions\Helpers;

use Illuminate\Html;

use App\Producto;

use App\Categoria;



class ProductoController extends Controller

{

    public function __construct()

    {

        $this->middleware('auth');

        $active = 'productos';

    }



    public function create()

    {

        $categoria = Categoria::orderBy('orden','asc')->pluck('titulo_es', 'id')->all();

        return view('adm.productos.create', compact('categoria'));

    }



    public function store(Request $request)

    {

        $datos = $request->all();



        $file_save = Helpers::saveImage($request->file('imagen'), 'productos');

        $file_save ? $datos['imagen'] = $file_save : false;



        $file_save = Helpers::saveImage($request->file('plano'), 'planos');

        $file_save ? $datos['plano'] = $file_save : false;



        Producto::create($datos);

        $success = 'Registro creado correctamente';

        return back()->with('success', $success);

    }



    public function index()

    {

        $producto = Producto::orderBy('orden','asc')->paginate(10);

        return view('adm.productos.index', compact('producto'));

    }



    public function edit($id)

    {

        $producto = Producto::find($id);

        $categoria = Categoria::orderBy('orden','asc')->pluck('titulo_es', 'id')->all();

        return view('adm.productos.edit', compact('producto', 'categoria'));

    }



    public function update(Request $request, $id)

    {

        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'productos');

        $file_save ? $datos['imagen'] = $file_save : false;        

        $file_save = Helpers::saveImage($request->file('plano'), 'planos');

        $file_save ? $datos['plano'] = $file_save : false;

        $producto = Producto::find($id);

        $producto->fill($datos);

        $producto->save();

        $success = 'Registro editado correctamente';

        return back()->with('success', $success);

    }



    public function destroy($id)

    {

        $producto = Producto::find($id);

        $producto->delete();

        $success = 'Registro eliminado correctamente';

        return back()->with('success', $success);

    }

}

