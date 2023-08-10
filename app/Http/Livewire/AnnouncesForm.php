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

    protected $listeners = ["edit"];

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

        $announces = Announce::create([

            "title" => $this->title,

            "category_id" => $this->category_id,

            "description" => $this->description,

            "price" =>$this->price,
            
            "user_id" => auth()->user()->id,
            
        ]);

        /*if($???->hasFile("img") && $???->file("img")->isValid()){
            
            $extension = $this->img->file("img")->extension();
            
            $randomName = uniqid("announce_img_") . "$extension";
            
            $imgPath = $???->file("img")->storeAs("public\image\ " . $???->id, $randomName);
            
            $???->img = $imgPath;
            
            $???->save();
            
        }*/
        
        session()->flash("message", "Annuncio creato con successo!");
        
        $this->cleanForm();

        $this->emitTo("announces-list", "loadAnnounces");
        
    }

    public function cleanForm() {

        $this->mount();
}
    
    public function mount() {

            $this->title = '';
            $this->category_id = '';
            $this->description = ''; 
            $this->price = '';
    }

    public function edit($announce_id) {

        $announce = Announce::find($announce_id);

        $this->title = $announce->title;

        $this->category_id = $announce->category_id ;
        
        $this->description = $announce->description; 
        
        $this->price = $announce->price;

    }


    public function render()
    {
        $categories = Category::all();
        
        return view('livewire.announces-form', compact("categories"));
    }
    
    
}
