<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announce;

class RevisorController extends Controller
{
    
    public function index()
    {
        $announcement_to_check = Announce::where("is_accepted", null)->first();
        return view("revisor.index", compact("announcement_to_check"));
    }

    public function acceptAnnouncement(Announce $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with("message", "Annuncio Accettato");
    }

    public function rejectAnnouncement(Announce $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with("message", "Annuncio Rifiutato");
    }

}
