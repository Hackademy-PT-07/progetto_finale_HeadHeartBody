<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announce;

class AnnounceController extends Controller
{
   public function index (){

      $announcements = Announce::orderBy("created_at", "Desc")->get();
      
      return view ('announces.index', compact("announcements"));
   }

   public function announcementsLivewire() {

      return view ('announces.announcementsLivewire');
      
   }

   public function show(Announce $announce)
   {

      
      return view("announces.show", compact("announce"));
   }


   /* public function TimeOrderAsc() {

      

      return view ('announces.index', compact("announcements"));
   } */
}
