<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactanosMaillable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }

    public function store(Request $request){
        $request->validate([
            'name'=> 'required',
            'correo'=> 'required',
            'mensaje'=> 'required'
        ]);


        Mail::to('andreaguel2028@gmail.com')->send(new ContactanosMaillable ($request->all()));
        // session()->flash('info', 'Mensaje enviado'); para mostrar mensajes de alertas de solo un uso
        return redirect()->route('contactanos.index')
        ->with('info','Mensaje enviado');
    }
}
