<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Metadato;

class DistribuidorController extends Controller
{
    public function index()
    {
        $active = 'registro';
        $metadato = Metadato::where('seccion', $active)->first();

        return view('page.registro', compact('active', 'metadato'));
    }

    public function registroStore(Request $request)
    {
        $usuario                 = new User();
        //$usuario->email          = $request->email;
        $usuario->user           = $request->user;
        $usuario->first_name     = $request->first_name;
        $usuario->last_name      = $request->last_name;
        $usuario->razon_social   = $request->razon_social;
        $usuario->phone          = $request->phone;
        $usuario->address        = $request->address;
        $usuario->localidad      = $request->localidad;
        $usuario->contenido_mostrar= 'AA';
        $usuario->habilitado     = 'off';
        $usuario->role           = 'cliente';
        $usuario->password       = \Hash::make($request->password);
        $usuario->save();

        $success = 'Usuario creado correctamente';
        return redirect('/registro')->with('success', $success);
    }

    public function store(Request $request)
    {
        $distribuidor = DB::table('distribuidores')->where('email', $request->input('email'))->first();
        if (isset($distribuidor)) {
            if ($distribuidor->password == $request->input('password')) {
                session(['distribuidor' => $distribuidor->id]);
                return redirect('zproductos');
            } else {
                $error = "El usuario y/o contraseña son invalidos";
                return back()->with('error');
            }
        } else {
            $error = "El usuario y/o contraseña son invalidos";
            return back()->with('error');
        }
    }
}
