<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Icon;

class IconosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $active = 'iconos';
    }


    public function create($seccion)
    {
        $seccion = $seccion;
        return view('adm.iconos.create', compact('seccion'));
    }


    public function store(Request $request)
    {
        $var = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'iconos');
        $file_save ? $var['imagen'] = $file_save : false;

        Icon::create($var);
        $success = 'Registro creado correctamente';
        return back()->with('success', $success);
    }


    public function show($seccion)
    {
        $var = Icon::all();
        $seccion = $seccion;
        return view('adm.iconos.index', compact('var', 'seccion'));
    }


    public function edit($id)
    {
        $var = Icon::find($id);
        return view('adm.iconos.edit', compact('var'));
    }


    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'iconos');
        $file_save ? $datos['imagen'] = $file_save : false;

        $var = Icon::find($id);
        $var->fill($datos);
        $var->save();
        $success = 'Registro editado correctamente';
        return back()->with('success', $success);
    }


    public function destroy($id)
    {
        $var = Icon::find($id);
        $var->delete();
        $success = 'Registro eliminado correctamente';
        return back()->with('success', $success);
    }
}
