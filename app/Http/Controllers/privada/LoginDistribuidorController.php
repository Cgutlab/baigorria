<?php

namespace App\Http\Controllers\privada;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Carbon\Carbon;
use Redirect;
use Session;
use Request;

class LoginDistribuidorController extends Controller
{
	public function index(){
    	return view('page.registro');
    }
/*
    public function store(LoginRequest $request){
    	if(Auth::attempt(['user'=> $request['user'], 'password'=> $request['password']])){
    		return Redirect::to('catalogos');
    	}
        else{
            return view('page.registro');
        }
    }

*/
		public function login(LoginRequest $request){
			if(Auth::attempt(['user'=> $request['user'], 'password'=> $request['password']])){
				if(Auth()->user()->habilitado == 'on'){
					return Redirect::to('privatezone');
				}else{
					Auth::logout();
					$success = 'disabled_auth';
					return back()->with(compact('success'));
				}
			}else{
				Auth::logout();
				$success = 'error_auth';
			  return back()->with(compact('success'));
			}
		}

    public function logout(){
    	Auth::logout();
    	return back();
    }

		public function logoutd(){
    	Auth::logout();
    	return Redirect::to('/');
    }
}
