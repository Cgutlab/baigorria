<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\PresentacionsRequest;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Illuminate\Html;
use App\Presentacion;
use App\Producto;
use App\Categoria;

class PresentacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $active = 'presentaciones';
    }

    public function create()
    {
        //$producto = Producto::orderBy('orden','asc')->pluck('titulo_es', 'id')->all();

        $selectCategorias = Categoria::orderBy('orden','asc')->get();
        $selectProductos = Producto::orderBy('orden','asc')->get();
        return view('adm.presentaciones.create', compact('producto', 'selectCategorias', 'selectProductos'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen1'), 'presentaciones');
        $file_save ? $datos['imagen1'] = $file_save : false;
        $file_save = Helpers::saveImage($request->file('imagen2'), 'presentaciones');
        $file_save ? $datos['imagen2'] = $file_save : false;
        $file_save = Helpers::saveImage($request->file('imagen3'), 'presentaciones');
        $file_save ? $datos['imagen3'] = $file_save : false;
        $file_save = Helpers::saveImage($request->file('imagen4'), 'presentaciones');
        $file_save ? $datos['imagen4'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'fichas');
        $file_save ? $datos['ficha'] = $file_save : false;

        Presentacion::create($datos);
        $success = 'Registro creado correctamente';
        return back()->with('success', $success);
    }

    public function index()
    {
        $presentacion = Presentacion::orderBy('orden','asc')->paginate(10);
        return view('adm.presentaciones.index', compact('presentacion'));
    }

    public function edit($id)
    {
        $presentacion = Presentacion::find($id);
        $producto = Producto::orderBy('orden','asc')->pluck('titulo_es', 'id')->all();

        $selectCategorias = Categoria::orderBy('orden','asc')->get();
        $selectProductos = Producto::orderBy('orden','asc')->get();
        return view('adm.presentaciones.edit', compact('presentacion', 'producto', 'selectCategorias', 'selectProductos'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen1'), 'presentaciones');
        $file_save ? $datos['imagen1'] = $file_save : false;
        $file_save = Helpers::saveImage($request->file('imagen2'), 'presentaciones');
        $file_save ? $datos['imagen2'] = $file_save : false;
        $file_save = Helpers::saveImage($request->file('imagen3'), 'presentaciones');
        $file_save ? $datos['imagen3'] = $file_save : false;
        $file_save = Helpers::saveImage($request->file('imagen4'), 'presentaciones');
        $file_save ? $datos['imagen4'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'fichas');
        $file_save ? $datos['ficha'] = $file_save : false;

        $presentacion = Presentacion::find($id);
        $presentacion->fill($datos);
        $presentacion->save();
        $success = 'Registro editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $presentacion = Presentacion::find($id);
        $presentacion->delete();
        $success = 'Registro eliminado correctamente';
        return back()->with('success', $success);
    }
}
