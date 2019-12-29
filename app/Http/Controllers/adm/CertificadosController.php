<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Certificado;

class CertificadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $active = 'certificados';
    }


    public function create($seccion)
    {
        $seccion = $seccion;
        return view('adm.certificados.create', compact('seccion'));
    }


    public function store(Request $request)
    {
        $var = $request->all();

        $file_save = Helpers::saveImage($request->file('ficha'), 'certificados');
        $file_save ? $var['ficha'] = $file_save : false;

        Certificado::create($var);
        $success = 'Registro creado correctamente';
        return back()->with('success', $success);
    }


    public function show($seccion)
    {
        $var = Certificado::where('seccion', $seccion)->get();
        $seccion = $seccion;
        return view('adm.certificados.index', compact('var', 'seccion'));
    }


    public function edit($id)
    {
        $var = Certificado::find($id);
        return view('adm.certificados.edit', compact('var'));
    }


    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('ficha'), 'certificados');
        $file_save ? $datos['ficha'] = $file_save : false;

        $var = Certificado::find($id);
        $var->fill($datos);
        $var->save();
        $success = 'Registro editado correctamente';
        return back()->with('success', $success);
    }


    public function destroy($id)
    {
        $var = Certificado::find($id);
        $var->delete();
        $success = 'Registro eliminado correctamente';
        return back()->with('success', $success);
    }
}
