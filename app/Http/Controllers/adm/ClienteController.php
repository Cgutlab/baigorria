<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use App\User;
use App\Contenido;
use Redirect;

class ClienteController extends Controller
{

    public function index(){
        $users = User::where('role', 'cliente')->paginate(8);
        return view('adm.clientes.editarUsuarios', compact('users','usuario','usuarios_seccion','usuarios_edit'));
    }

    public function create(){
        $usuario = Auth::user();
        $usuarios_seccion = 'active';
        $usuarios_create = 'active';
        return view('adm.clientes.crearUsuario',compact('usuario','usuarios_seccion','usuarios_create'));
    }

    public function login(){
        return view('adm.login');
    }

    public function store(UserRequest $request){

        /*$usuario = new User ($request->all());*/
        $usuario = new User();
        $usuario->contenido_mostrar        = $request->contenido_mostrar;
        $usuario->user        = $request->user;
        $usuario->first_name  = $request->first_name;
        $usuario->last_name   = $request->last_name;
        $usuario->razon_social= $request->razon_social;
        $usuario->phone       = $request->phone;
        $usuario->address     = $request->address;
        $usuario->email       = $request->email;
        $usuario->habilitado  = $request->habilitado;
        $usuario->localidad  = $request->localidad;
        $usuario->precio_bulones    = $request->precio_bulones;
        $usuario->precio_esparragos = $request->precio_esparragos;
        $usuario->precio_especial   = $request->precio_especial;

        $usuario->password=\ Hash::make($request->password);
        $success = 'Usuario creado correctamente';
        $usuario->save();
        return back()->with('success', $success);

    }

    public function edit($id){
        $user = User::find($id);
        $usuario = Auth::user();
        $usuarios_seccion = 'active';
        $usuarios_edit = 'active';
        $contenidos = Contenido::where('seccion', 'privatezone')->get();
        return view('adm.clientes.editarUsuario', compact('user','usuario','usuarios_seccion','usuarios_edit', 'contenidos'));
    }

    public function update(UserRequest $request, $id){
        $usuario = User::find($id);
        $usuario->contenido_mostrar        = $request->contenido_mostrar;
        $usuario->user        = $request->user;
        $usuario->first_name  = $request->first_name;
        $usuario->last_name   = $request->last_name;
        $usuario->razon_social= $request->razon_social;
        $usuario->phone       = $request->phone;
        $usuario->address     = $request->address;
        $usuario->email       = $request->email;
        $usuario->habilitado  = $request->habilitado;
        $usuario->localidad  = $request->localidad;
        $usuario->precio_bulones    = $request->precio_bulones;
        $usuario->precio_esparragos = $request->precio_esparragos;
        $usuario->precio_especial   = $request->precio_especial;
        if($request->password != null){
            $usuario->password= \Hash::make($request->password);
        }

        $usuario->save();
        $success = 'Usuario editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        $success = 'Usuario eliminado correctamente';
        return back()->with('success', $success);
    }
}
