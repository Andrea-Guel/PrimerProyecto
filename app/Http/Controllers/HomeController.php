<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{   //Este metodo solo se usa para cuando se administe una unica ruta
    public function __invoke()
    {
        return view('home');
    }
}
