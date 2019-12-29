<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Lista;

class ListadePreciosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $active = 'listadeprecios';
    }


    public function create($seccion)
    {
        $seccion = $seccion;
        return view('adm.listadeprecios.create', compact('seccion'));
    }


    public function store(Request $request)
    {
        $var = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'listadeprecios');
        $file_save ? $var['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'listadeprecios');
        $file_save ? $var['ficha'] = $file_save : false;

        Lista::create($var);
        $success = 'Registro creado correctamente';
        return back()->with('success', $success);
    }


    public function show($seccion)
    {
        $var = Lista::where('seccion', $seccion)->get();
        $seccion = $seccion;
        return view('adm.listadeprecios.index', compact('var', 'seccion'));
    }


    public function edit($id)
    {
        $var = Lista::find($id);
        return view('adm.listadeprecios.edit', compact('var'));
    }


    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'listadeprecios');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'listadeprecios');
        $file_save ? $datos['ficha'] = $file_save : false;

        $var = Lista::find($id);
        $var->fill($datos);
        $var->save();
        $success = 'Registro editado correctamente';
        return back()->with('success', $success);
    }


    public function destroy($id)
    {
        $var = Lista::find($id);
        $var->delete();
        $success = 'Registro eliminado correctamente';
        return back()->with('success', $success);
    }
}
