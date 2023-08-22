<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announce;

use App\Models\Category;


class AnnounceController extends Controller
{
   // Announces

   public function index (){

      $announces = Announce::where("is_accepted", true)->orderBy("created_at", "DESC")->get();

      $categories = Category::orderBy("name", "ASC")->get();

      $timeOrderDesc = route('announces.timeOrderDesc');

      $timeOrderAsc = route('announces.timeOrderAsc');
      
      //dd($announces);
      
      return view ('announces.index', compact("announces", "categories", "timeOrderDesc", "timeOrderAsc"));
   }

   // Announces create form/list

   public function announcesLivewire() {

      return view ('announces.announcesLivewire');
      
   }

   // Announce

   public function show(Announce $announce)
   {
      //dd($announce);

      return view("announces.show", compact("announce"));

   }

   // Announces Order Asc

   public function timeOrderAsc() {
      

      $announces = Announce::where("is_accepted", true)->orderBy("created_at", "ASC")->get();
      
      $categories = Category::orderBy("name", "ASC")->get();

      $timeOrderDesc = route('announces.timeOrderDesc');

      $timeOrderAsc = route('announces.timeOrderAsc');

      return view ('announces.index', compact("announces", "categories", "timeOrderDesc", "timeOrderAsc"));
   }

   // Announces Order Desc

   public function timeOrderDesc() {

      $announces = Announce::where("is_accepted", true)->orderBy("created_at", "DESC")->get();
      
      $categories = Category::orderBy("name", "ASC")->get();

      $timeOrderDesc = route('announces.timeOrderDesc');

      $timeOrderAsc = route('announces.timeOrderAsc');

      return view ('announces.index', compact("announces", "categories", "timeOrderDesc", "timeOrderAsc"));
   }

   // Announces Filter for category

   public function  categoryOrder($announce) {

      $announces = Announce::where("category_id", $announce)->where("is_accepted", true)->orderBy("created_at", "DESC")->get();

      $categories = Category::orderBy("name", "ASC")->get();

      if(count($announces) > 0){

         $timeOrderDesc = route('announces.timeOrderDescCat', $announces[0]["category_id"]);

         $timeOrderAsc = route('announces.timeOrderAscCat', $announces[0]["category_id"]);

      }
      else{

         $timeOrderDesc = route('announces.timeOrderDesc');

         $timeOrderAsc = route('announces.timeOrderAsc');

      }

      return view ('announces.index', compact("announces", "categories", "timeOrderDesc", "timeOrderAsc"));
   }

   // Announces Order Asc if category is select

   public function timeOrderAscCat($announce) {
      
      $announces = Announce::where("category_id", $announce)->where("is_accepted", true)->orderBy("created_at", "ASC")->get();
      
      $categories = Category::orderBy("name", "ASC")->get();

      $timeOrderDesc = route('announces.timeOrderDescCat', $announces[0]["category_id"]);

      $timeOrderAsc = route('announces.timeOrderAscCat', $announces[0]["category_id"]);

      return view ('announces.index', compact("announces", "categories", "timeOrderDesc", "timeOrderAsc"));
   }

   // Announces Order Desc if category is select

   public function timeOrderDescCat($announce) {
      
      $announces = Announce::where("category_id", $announce)->where("is_accepted", true)->orderBy("created_at", "DESC")->get();
      
      $categories = Category::orderBy("name", "ASC")->get();

      $timeOrderDesc = route('announces.timeOrderDescCat', $announces[0]["category_id"]);

      $timeOrderAsc = route('announces.timeOrderAscCat', $announces[0]["category_id"]);

      return view ('announces.index', compact("announces", "categories", "timeOrderDesc", "timeOrderAsc"));
   }
}
