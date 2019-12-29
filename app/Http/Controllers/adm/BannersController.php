<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Banner;

class BannersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $active = 'banner';
    }


    public function create($seccion)
    {
        $seccion = $seccion;
        return view('adm.banners.create', compact('seccion'));
    }


    public function store(Request $request)
    {
        $var = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'banner');
        $file_save ? $var['imagen'] = $file_save : false;

        Banner::create($var);
        $success = 'Registro creado correctamente';
        return back()->with('success', $success);
    }


    public function show($seccion)
    {
        $var = Banner::where('seccion', $seccion)->get();
        $seccion = $seccion;
        return view('adm.banners.index', compact('var', 'seccion'));
    }


    public function edit($id)
    {
        $var = Banner::find($id);
        return view('adm.banners.edit', compact('var'));
    }


    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'banner');
        $file_save ? $datos['imagen'] = $file_save : false;

        $var = Banner::find($id);
        $var->fill($datos);
        $var->save();
        $success = 'Registro editado correctamente';
        return back()->with('success', $success);
    }


    public function destroy($id)
    {
        $var = Banner::find($id);
        $var->delete();
        $success = 'Registro eliminado correctamente';
        return back()->with('success', $success);
    }
}
