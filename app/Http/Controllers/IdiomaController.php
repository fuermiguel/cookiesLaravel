<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdiomaController extends Controller
{
    //
    function personalizar(){
        $idioma = \Request::cookie('idioma','español');
        return view('personalizacion.formulario_idioma',['idioma' => $idioma]);

    }

    function guardarpersonalizacion(Request $request){
     

       $this->validate($request,['idioma'=> 'required']);

       switch ($request->input('idioma')) {
           case '1':
               # code...Español
               $idioma = 'Español';
               break;
           case '2':
               # code...Chino
               $idioma = 'Chino';
               break;
           case '3':
               # code...Ruso
               $idioma = 'Ruso';
               break;
           
           default:
               # code...
               $idioma = 'Español';
               break;
       }

       return redirect('/idioma')
       ->withCookie(cookie('idioma',$idioma,60*24*365));
    }
}
