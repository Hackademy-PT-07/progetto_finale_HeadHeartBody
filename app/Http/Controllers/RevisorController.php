<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\LavoraConNoiMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Announce;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    
    public function index()
    {
        $announce_to_check = Announce::where("is_accepted", null)->first();

        return view("revisor.index", compact("announce_to_check"));
    }

    public function acceptAnnounce(Announce $announce)
    {
        $announce->setAccepted(true);
        
        return redirect()->back()->with("message", "Annuncio Accettato");
    }

    public function rejectAnnounce(Announce $announce)
    {
        $announce->setAccepted(false);
        
        return redirect()->back()->with("message", "Annuncio Rifiutato");
    }


   public function revisorRequest(){

    Mail::to('admin@example.com')->send(new LavoraConNoiMail(auth()->user()));

    return redirect()->route("home")->with(['message'=>'Abbiamo ricevuto la tua richiesta. Ti risponderemo il prima possibile']);

   }

   public function acceptRequest(User $user){

    Artisan::call("presto:makeUserRevisor", ["email" => $user->email]);

    return redirect()->route("home")->with(['message'=>"Complimenti utente $user->name, ora sei un revisore!"]);

   }

}
