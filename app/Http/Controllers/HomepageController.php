<?php

namespace App\Http\Controllers;

use App\Models\Announce;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class HomepageController extends Controller
{
    public function homepage()
    {

        $searched = "";

        $category = [];

        $order = [];

        $announces = Announce::take(6)->where('is_accepted', true)->orderBy("created_at", "DESC")->get();

        return view("homepage.homepage", compact('searched', 'category', 'order', 'announces'));
    }

    public function setLanguage($lang)
    {
        session()->put("locale", $lang);

        return redirect()->back();
    }

    public function announceCategorySearch($category_id)
    {

        $announces = [];

        $searched = "";

        $category = [];

        $order = [];

        $announces = Announce::where("category_id", $category_id)->where('is_accepted', true)->orderBy("created_at", "DESC")->paginate(15);

        return view("announces.index", compact("announces", "searched", "category", "order"));
    }
}
