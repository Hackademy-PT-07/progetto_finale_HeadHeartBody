<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Announce;

use App\Models\Category;




class HomepageController extends Controller
{
    public function homepage() {

        return view("homepage.homepage");
    }

    public function setLanguage($lang)
    {
        session()->put("locale", $lang);
        return redirect()->back();
    }

}
