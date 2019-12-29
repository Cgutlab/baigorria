<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Articulo;

class ArticulosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $active = 'articulos';
    }


    public function create($seccion)
    {
        $seccion = $seccion;
        return view('adm.articulos.create', compact('seccion'));
    }


    public function store(Request $request)
    {
        $var = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'articulos');
        $file_save ? $var['imagen'] = $file_save : false;

        Articulo::create($var);
        $success = 'Registro creado correctamente';
        return back()->with('success', $success);
    }


    public function show($seccion)
    {
        $var = Articulo::where('seccion', $seccion)->get();
        $seccion = $seccion;
        return view('adm.articulos.index', compact('var', 'seccion'));
    }


    public function edit($id)
    {
        $var = Articulo::find($id);
        return view('adm.articulos.edit', compact('var'));
    }


    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'articulos');
        $file_save ? $datos['imagen'] = $file_save : false;

        $var = Articulo::find($id);
        $var->fill($datos);
        $var->save();
        $success = 'Registro editado correctamente';
        return back()->with('success', $success);
    }


    public function destroy($id)
    {
        $var = Articulo::find($id);
        $var->delete();
        $success = 'Registro eliminado correctamente';
        return back()->with('success', $success);
    }
}
