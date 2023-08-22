<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\LavoraConNoiMail;
use Illuminate\Support\Facades\Mail;

class LavoraConNoiController extends Controller
{
    
    public function form(){

        $title = 'Lavora con noi';
        $text= 'Vuoi fare parte del nostro team? Scrivici ed analizzeremo la tua richiesta!';
        return view('LavoraConNoi.lavoraConNoi', compact('title'));
   }
   public function save(Request $request){

    $mail = new LavoraConNoiMail($request->name, $request->email, $request->textMessage);
    Mail::to('admin@example.com')->send($mail);


    return redirect()->route('lavoraConNoi')
                     ->with(['success'=>'Abbiamo ricevuto la tua richiesta. Ti risponderemo il prima possibile']);

   }
}
