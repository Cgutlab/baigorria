<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\LineaTiempo;

class LineaTiempoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $active = 'lineatiempo';
    }


    public function create($seccion)
    {
        $seccion = $seccion;
        return view('adm.lineatiempo.create', compact('seccion'));
    }


    public function store(Request $request)
    {
        $var = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'lineatiempo');
        $file_save ? $var['imagen'] = $file_save : false;

        LineaTiempo::create($var);
        $success = 'Registro creado correctamente';
        return back()->with('success', $success);
    }


    public function show($seccion)
    {
        $var = LineaTiempo::all();
        $seccion = $seccion;
        return view('adm.lineatiempo.index', compact('var', 'seccion'));
    }


    public function edit($id)
    {
        $var = LineaTiempo::find($id);
        return view('adm.lineatiempo.edit', compact('var'));
    }


    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'lineatiempo');
        $file_save ? $datos['imagen'] = $file_save : false;

        $var = LineaTiempo::find($id);
        $var->fill($datos);
        $var->save();
        $success = 'Registro editado correctamente';
        return back()->with('success', $success);
    }


    public function destroy($id)
    {
        $var = LineaTiempo::find($id);
        $var->delete();
        $success = 'Registro eliminado correctamente';
        return back()->with('success', $success);
    }
}
