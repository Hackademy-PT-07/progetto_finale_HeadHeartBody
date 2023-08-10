<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announce;

class AnnounceController extends Controller
{
   public function index (){

      $announcements = Announce::all();

      return view ('announces.index', compact("announcements"));
   }

   public function announcementsLivewire() {

      return view ('announces.announcementsLivewire');
      
   }

}
