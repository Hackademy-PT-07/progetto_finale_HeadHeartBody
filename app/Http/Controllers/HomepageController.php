<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announce;

use App\Models\Category;




class HomepageController extends Controller
{
    public function homepage() {

        $searched = "";

        $category = [];

        $order = [];
      
        $price = 0;

        return view("homepage.homepage", compact('searched', 'category', 'order', 'price'));

    }

    public function setLanguage($lang)
    {
        session()->put("locale", $lang);
        return redirect()->back();
    }

}
