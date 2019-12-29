<?php

namespace App\Http\Controllers\Auth\Client;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/privada';
    public function __construct()
    {
    	//$this->middleware('guest:cliente')->except('logout');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {

    	return view('adm.privada');
    }

    public function loginClient(Request $request)
    {
      // Validate the form data

    	$this->validate($request, [
    		'user' => 'required',
    		'password' => 'required'
    	]);

      // Attempt to log the user in
    	if (Auth::guard('client')->attempt(['user' => $request->user, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
    		return redirect()->intended(route('client.dashboard'));
    	}
      // if unsuccessful, then redirect back to the login with the form data
    	return redirect()->back()->withInput($request->only('user', 'remember'));
    }
    public function logout()
    {
    	Auth::guard('client')->logout();
    	return redirect()->route('client.auth.login');
    }
}
