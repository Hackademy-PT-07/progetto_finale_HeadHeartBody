<?php

namespace App\Http\Controllers;
use App\Mail\LavoraConNoiMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function form (){
        $title = 'Contatti';

    }

    public function Save(ContactRequest $request){

        $mail= new LavoraConNoiMail($request->name, $request->email, $request->textMessage, auth()->user());
        Mail::to('admin@example.com')->send($mail);

        return redirect()->route('home')
                         ->with(['message'=>'Abbiamo ricevuto la tua richiesta. Ti risponderemo il prima possibile.']);
    }

   
}