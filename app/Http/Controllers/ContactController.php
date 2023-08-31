<?php

namespace App\Http\Controllers;
use App\Mail\LavoraConNoiMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;

class ContactController extends Controller
{
    public function form (){
        $title = 'Contatti';

    }

    public function Save(Request $request){

        $mail= new LavoraConNoiMail($request->name, $request->email, $request->message, auth()->user());
        Mail::to('admin@example.com')->send($mail);

        return redirect()->route('home')
                         ->with(['success'=>'Abbiamo ricevuto la tua richiesta. Ti risponderemo il prima possibile.']);
    }

   
}