<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

class RevisorController extends Controller
{
    
    public function index()
    {
        $announces_to_check = Announce::where("is_accepted", false)->first();
        return view("revisor.index", compact("announces_to_check"));
    }

    public function acceptAnnounce(Announce $announce)
    {
        $announce->setAccepted(true);
        return redirect()->back()->with("message", "Annuncio Accettato");
    }

    public function rejectAnnounce(Announce $announce)
    {
        $announce->delete();
        return redirect()->back()->with("message", "Annuncio Rifiutato");
    }

}
