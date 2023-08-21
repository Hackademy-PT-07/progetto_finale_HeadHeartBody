<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{

    public function lavoraConNoi(){

     $title = 'Lavora con noi';
     $text= 'Vuoi fare parte del nostro team? Scrivici ed analizzeremo la tua richiesta!';
     return view('LavoraConNoi.lavoraConNoi', compact('title'));
}

}

