<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Contacto;
use App\Dato;
use App\Correo;
use App\Metadato;
use App\Http\Requests\ContactoRequest;

class ContactoController extends Controller
{
    public function enviarMail(ContactoRequest $request) {
      $datos = Dato::where('tipo', 'correo')->first();

      $nombre = $request->input('nombre');
      $apellido = $request->input('apellido');

      Mail::send('page.mail', ['nombre'=> $request->input('nombre'),
                                        'apellido' => $request->input('apellido'),
                                        'telefono' => $request->input('telefono'),
                                        'email' => $request->input('email'),
                                        'mensaje' => $request->input('mensaje')
                                      ], function ($message) use ($nombre, $apellido) {
          $dato = Dato::where('tipo', 'correo')->first();
          $message->from('info@baigorria.com', 'WEB | Contacto');
          $message->to($dato->texto);
          $message->subject('Contacto de ' . $nombre . ' ' . $apellido);
      });

      if (count(Mail::failures()) > 0) {
          $success = 'Ha ocurrido un error al enviar el correo';
      }else{
          $success = 'Correo enviado correctamente';
      }

      return back()->with('success', $success);
    }
}
