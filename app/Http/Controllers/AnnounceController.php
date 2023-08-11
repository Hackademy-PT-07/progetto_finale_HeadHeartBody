<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announce;

use App\Models\Category;


class AnnounceController extends Controller
{
   public function index (){

      $announces = Announce::all();

      $categories = Category::orderBy("name", "ASC")->get();
      
      return view ('announces.index', compact("announces", "categories"));
   }

   public function announcementsLivewire() {

      return view ('announces.announcementsLivewire');
      
   }

   public function show(Announce $announce)
   {

      
      return view("announces.show", compact("announce"));
   }


   public function timeOrderAsc() {

      $announces = Announce::orderBy("created_at", "ASC")->get();

      
      $categories = Category::orderBy("name", "ASC")->get();


      return view ('announces.index', compact("announces", "categories"));
   }

   public function timeOrderDesc() {

      $announces = Announce::orderBy("created_at", "DESC")->get();
      
      $categories = Category::orderBy("name", "ASC")->get();

      return view ('announces.index', compact("announces", "categories"));
   }

   public function  categoryOrder($announce) {

      $announces = Announce::where("category_id", $announce)->get();

      $categories = Category::orderBy("name", "ASC")->get();

      return view ('announces.index', compact("announces", "categories"));
   }
}
