<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Destacado;

class DestacadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $active = 'calidad';
    }

    public function create($seccion)
    {
        $seccion = $seccion;
        return view('adm.destacados.create', compact('seccion'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'destacados');
        $file_save ? $datos['imagen'] = $file_save : false;

        Destacado::create($datos);
        $success = 'Registro creado correctamente';
        return back()->with('success', $success);
    }

    public function show($seccion)
    {
        $seccion = $seccion;
        $var = Destacado::orderBy('orden', 'asc')->where('seccion', $seccion)->paginate(10);
        return view('adm.destacados.index', compact('seccion', 'var'));
    }

    public function edit($id)
    {
        $var = Destacado::find($id);
        return view('adm.destacados.edit', compact('var'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'destacados');
        $file_save ? $datos['imagen'] = $file_save : false;

        $var = Destacado::find($id);
        $var->fill($datos);
        $var->save();
        $success = 'Registro editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $var = Destacado::find($id);
        $var->delete();
        $success = 'Registro eliminado correctamente';
        return back()->with('success', $success);
    }
}
