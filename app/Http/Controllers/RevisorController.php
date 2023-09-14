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

    public function revisedAnnounces()
    {
        $announces_revised = Announce::where("is_accepted", '!=', null)->where("revisor_id", auth()->user()->id)->orderBy("updated_at", "DESC")->paginate(15);

        return view("revisor.checked", compact("announces_revised"));
    }

    public function acceptAnnounce(Announce $announce)
    {

        $announce->revisor_id = auth()->user()->id;

        $announce->save();

        $announce->setAccepted(true);
        
        return redirect()->back();
    }

    public function rejectAnnounce(Announce $announce)
    {
        $announce->revisor_id = auth()->user()->id;

        $announce->save();

        $announce->setAccepted(false);
        
        return redirect()->back();
    }

    public function revisedAnnounceAgain(Announce $announce)
    {

        $announce->save();

        $announce->setAccepted(null);
        
        return redirect()->route("revisor.index");
    }


  

   public function acceptRequest(User $user){

    Artisan::call("presto:makeUserRevisor", ["email" => $user->email]);

    return redirect("/")->with(['message'=>"Complimenti utente $user->name, ora sei un revisore!"]);

   }

}
