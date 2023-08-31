<?php

namespace App\Http\Controllers;

use App\Models\Announce;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class HomepageController extends Controller
{
    public function homepage() {

        $searched = "";

        $category = [];

        $order = [];

        return view("homepage.homepage", compact('searched', 'category', 'order'));

    }

    public function setLanguage($lang)
    {
        session()->put("locale", $lang);
        
        return redirect()->back();
    }

}
