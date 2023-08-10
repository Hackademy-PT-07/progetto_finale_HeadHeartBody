<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announce;

class AnnounceController extends Controller
{
   public function index (){

      $announcements = Announce::paginate(4);
      
      return view ('announces.index', compact("announcements"));
   }

   public function announcementsLivewire() {

      return view ('announces.announcementsLivewire');
      
   }


   public function timeOrder() {

      $announcements = Announce::take(6)->get()->sortByDesc('created_at');

      return view ('announces.timeOrder');
   }
}
