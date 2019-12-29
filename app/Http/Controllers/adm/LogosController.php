<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extensions\Helpers;
use Redirect;

use App\Logo;

class LogosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $active = 'logos';
        $logos = Logo::paginate(8);
        return view('adm.logos.editarLogos', compact('logos','usuario','active'));
    }

    public function edit($id)
    {
        $active = 'logos';
        $logo = Logo::find($id);
        $usuario = Auth::user();
        return view('adm.logos.editarLogo', compact('logo','usuario','active'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();
        $logo = Logo::find($id);

        $file_save = Helpers::saveImage($request->file('imagen'), 'logos');
        $file_save ? $datos['imagen'] = $file_save : false;

        $logo->fill($datos);
        $logo->save();
        $success = 'Registro editado correctamente';
        return Redirect::to('adm/logos')->with('success', $success);
    }

}
