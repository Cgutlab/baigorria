<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Laracasts\Flash\Flash;
use App\HomeCliente;
use App\Contenido;
use App\Destacado;
use App\Slider;
use Redirect;

class HomeController extends Controller
{
    function editarDestacados(){
        $usuario = Auth::user();
        $destacados = Destacado::all();
        $destacados_seccion = 'active';
        $destacados_edit = 'active';

        return view('adm.home.editarDestacados',  compact('usuario', 'destacados','destacados_edit','destacados_seccion'));
    }

    function editarDestacado($id){
        $usuario = Auth::user();
        $destacado = Destacado::find($id);
        $destacados_seccion = 'active';
        $destacados_edit = 'active';

        return view('adm.home.editarDestacado',  compact('productos','usuario','destacado','destacados_edit','destacados_seccion'));
    }

    function updateDestacado(Request $request, $id){
        $datos = $request->all();
        $destacado = Destacado::find($id);

        $file_save = Helpers::saveImage($request->file('imagen'), 'destacados');
        $file_save ? $datos['imagen'] = $file_save : false;

        $destacado->fill($datos);
        $destacado->save();
        $success = 'Destacado editado correctamente';
        return back()->with('success', $success);
    }
}
