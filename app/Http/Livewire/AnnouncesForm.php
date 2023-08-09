<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Announce;

use App\Models\Category;

class AnnouncesForm extends Component
{
    public $title;

    public $category_id;

    public $description;

    public $img;

    public $price;

    protected $rules = [
        "title" => "required|max:50",

        "category_id" => "required",

        "description" => "required",

        "price" => "required",

    ];

    protected $messages = [
        
        "required" => "Il campo è obbligatorio",

        "title.max:50" => "Massimo 50 caratteri",

    ];
   


    public function store() {

        $this->validate();

        $announcements = Announce::create([

            "title" => $this->title,

            "category_id" => $this->category_id,

            "description" => $this->description,

            "price" =>$this->price,

            "user_id" => auth()->user()->id,

        ]);

        /*if($announcements->hasFile("img") && $announcements->file("img")->isValid()){

            $extension = $this->img->file("img")->extension();

            $randomName = uniqid("announce_img_") . "$extension";

            $imgPath = $announcements->file("img")->storeAs("public\image\ " . $announcements->id, $randomName);

            $announcements->img = $imgPath;

            $announcements->save();

        }*/

        session()->flash("success", "Annuncio creato con successo!");

        $this->clearForm();

    }


    public function render()
    {
        $categories = Category::all();
        
        return view('livewire.announces-form', compact("categories"));
    }
    
    
}
