<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;
use Request;
include("lib/geoiploc.php");

class Idioma
{
    public function handle($request, Closure $next)
    {
      //$idioma = "en";
      //$idioma = "br";
      //$idioma = "es";
      $ip_cliente = Request::ip();

      if($request->session()->has('idioma')){
        $idioma = $request->session()->get('idioma');
      }elseif(getCountryFromIP($ip_cliente, " NamE") == 'United States' )
      {
          $idioma = "en";
      }
      elseif (getCountryFromIP($ip_cliente, " NamE") == 'Brazil')
      {
          $idioma = "br";
      }else{
          $idioma = 'es';
      }

        App::setLocale($idioma);

        view()->share('idioma', $idioma);

        return $next($request);
    }
}
