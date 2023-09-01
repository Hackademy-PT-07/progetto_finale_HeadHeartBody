<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announce;



class AnnounceController extends Controller
{
   // Announces

   

   public function index()
   {

      $searched = "";

      $category = [];

      $order = [];
      

      $announces = Announce::where("is_accepted", true)->orderBy("created_at", "DESC")->paginate(15);
      
      return view('announces.index', compact("announces", "searched", "category", "order"));
   }

   // Announces create form/list

   public function announcesLivewire()
   {

      return view('announces.announcesLivewire');
   }

   // Announce

   public function show(Announce $announce)
   {
      //dd($announce);

      return view("announces.show", compact("announce"));
   }

   public function filterAnnounces(Request $request)
   {

      //dd($request); 

      $announces = [];

      $searched = "";

      $category = [];

      $order = [];



      if ($request->searched) {

         $announces = Announce::search($request->searched)->where('is_accepted', true)->orderBy("created_at", "DESC")->paginate(15);

         $searched = $request->searched;
      }


      if ($request->searched && $request->category) {

         $announces = Announce::search($request->searched)->where("category_id", $request->category)->where('is_accepted', true)->orderBy("created_at", "DESC")->paginate(15);

         $searched = $request->searched;

         if (count($announces)) {
            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];
         } else {
            $category = [];
         }

      } else if ($request->category) {

         $announces = Announce::where("category_id", $request->category)->where('is_accepted', true)->orderBy("created_at", "DESC")->paginate(15);

         if (count($announces)) {
            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];
         } else {
            $category = [];
         }
      }



      if ($request->searched && $request->category && $request->order == "Desc") {

         $announces = Announce::search($request->searched)->where("category_id", $request->category)->where('is_accepted', true)->orderBy("created_at", "DESC")->paginate(15);

         $searched = $request->searched;

         if (count($announces)) {
            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];
         } else {

            $category = [];
         
         }

         $order = ["Desc" => "Ordine Decrescente"];

      } else if ($request->searched && $request->order == "Desc") {

         $announces = Announce::search($request->searched)->where('is_accepted', true)->orderBy("created_at", "DESC")->paginate(15);

         $searched = $request->searched;

         $order = ["Desc" => "Ordine Decrescente"];

      } else if ($request->category && $request->order == "Desc") {

         $announces = Announce::where("category_id", $request->category)->where('is_accepted', true)->orderBy("created_at", "DESC")->paginate(15);
         
         if (count($announces)) {

            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];

         } else {

            $category = [];
         
         }

         $order = ["Desc" => "Ordine Decrescente"];

      } else if ($request->order == "Desc") {

         $announces = Announce::orderBy("created_at", "DESC")->where('is_accepted', true)->paginate(15);

         
         $order = ["Desc" => "Ordine Decrescente"];
      }


      if ($request->searched && $request->category && $request->order == "Asc") {

         $announces = Announce::search($request->searched)->where("category_id", $request->category)->where('is_accepted', true)->orderBy("created_at", "ASC")->paginate(15);

         $searched = $request->searched;

         if (count($announces)) {

            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];

         } else {

            $category = [];
         
         }

         $order = ["Asc" => "Ordine Crescente"];

      } else if ($request->searched && $request->order == "Asc") {

         $announces = Announce::search($request->searched)->where('is_accepted', true)->orderBy("created_at", "ASC")->paginate(15);

         $searched = $request->searched;
         
         $order = ["Asc" => "Ordine Crescente"];

      } else if ($request->category && $request->order == "Asc") {

         $announces = Announce::where("category_id", $request->category)->where('is_accepted', true)->orderBy("created_at", "ASC")->paginate(15);

         if (count($announces)) {

            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];
            
         } else {

            $category = [];
         
         }

         $order = ["Asc" => "Ordine Crescente"];

      } else if ($request->order == "Asc") {

         $announces = Announce::orderBy("created_at", "ASC")->where('is_accepted', true)->paginate(15);

         $order = ["Asc" => "Ordine Crescente"];

      }

      //
      if ($request->searched && $request->category && $request->order == "PriceDesc") {

         $announces = Announce::search($request->searched)->where("category_id", $request->category)->where('is_accepted', true)->orderBy("price", "DESC")->paginate(15);

         $searched = $request->searched;

         if (count($announces)) {
            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];
         } else {

            $category = [];
         
         }

         $order = ["PriceDesc" => "Prezze Decrescente"];

      } else if ($request->searched && $request->order == "PriceDesc") {

         $announces = Announce::search($request->searched)->where('is_accepted', true)->orderBy("price", "DESC")->paginate(15);

         $searched = $request->searched;

         $order = ["PriceDesc" => "Prezzo Decrescente"];

      } else if ($request->category && $request->order == "PriceDesc") {

         $announces = Announce::where("category_id", $request->category)->where('is_accepted', true)->orderBy("price", "DESC")->paginate(15);
         
         if (count($announces)) {

            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];

         } else {

            $category = [];
         
         }

         $order = ["PriceDesc" => "Prezzo Decrescente"];

      } else if ($request->order == "PriceDesc") {

         $announces = Announce::orderBy("price", "DESC")->where('is_accepted', true)->paginate(15);

         
         $order = ["PriceDesc" => "Prezzo Decrescente"];
      }


      if ($request->searched && $request->category && $request->order == "PriceAsc") {

         $announces = Announce::search($request->searched)->where("category_id", $request->category)->where('is_accepted', true)->orderBy("price", "ASC")->paginate(15);

         $searched = $request->searched;

         if (count($announces)) {
            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];
         } else {

            $category = [];
         
         }

         $order = ["PriceAsc" => "Prezze Crescente"];

      } else if ($request->searched && $request->order == "PriceAsc") {

         $announces = Announce::search($request->searched)->where('is_accepted', true)->orderBy("price", "ASC")->paginate(15);

         $searched = $request->searched;

         $order = ["PriceAsc" => "Prezzo Crescente"];

      } else if ($request->category && $request->order == "PriceAsc") {

         $announces = Announce::where("category_id", $request->category)->where('is_accepted', true)->orderBy("price", "ASC")->paginate(15);
         
         if (count($announces)) {

            foreach ($announces as $announce) {

               $categoryName = $announce->category->name;
            }

            $category = [$request->category => $categoryName];

         } else {

            $category = [];
         
         }

         $order = ["PriceAsc" => "Prezzo Crescente"];

      } else if ($request->order == "PriceAsc") {

         $announces = Announce::orderBy("price", "ASC")->where('is_accepted', true)->paginate(15);

         
         $order = ["PriceAsc" => "Prezzo Crescente"];
      }
      

      if (!$request->searched && !$request->category && !$request->order) {

         return redirect()->route('announces.index');
      }


      return view("announces.index", compact("announces", "searched", "category", "order"));
   }

   public function searchAnnounces(Request $request)
   {
      // dd($request);
       $announces = Announce::search($request->searched)->where('is_accepted', true)->get();

       $categories = Category::orderBy("name", "ASC")->get();

       $timeOrderDesc = route('announces.timeOrderDesc');

       $timeOrderAsc = route('announces.timeOrderAsc');

       return view("announces.index", compact('announces', 'categories', "timeOrderDesc", "timeOrderAsc"));
   }
}
