<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Announce;

use App\Models\Category;


class AnnouncesForm extends Component
{

    public $announce;

    protected $listeners = ["edit"];

    protected $rules = [
        
        "announce.title" => "required|max:50",

        "announce.category_id" => "required",

        "announce.description" => "required",

        "announce.price" => "required",

    ];

    protected $messages = [
        
        "required" => "Il campo è obbligatorio",

        "announce.title.max:50" => "Massimo 50 caratteri",

    ];
   


    public function store() {

        $this->validate();


        /*if($???->hasFile("img") && $???->file("img")->isValid()){
            
            $extension = $this->img->file("img")->extension();
            
            $randomName = uniqid("announce_img_") . "$extension";
            
            $imgPath = $???->file("img")->storeAs("public\image\ " . $???->id, $randomName);
            
            $???->img = $imgPath;
            
            $???->save();
            
        }*/

        $this->announce->user_id = auth()->user()->id;

        $this->announce->save();
        
        session()->flash("message", "Operazione effettuata con successo!");
        
        $this->cleanForm();

        $this->emitTo("announces-list", "loadAnnounces");
        
    }
    
    public function render()
    {
        $categories = Category::orderBy("name", "ASC")->get();
        
        return view('livewire.announces-form', compact("categories"));
    }

    public function cleanForm() {

        $this->mount();
    }
    
    public function mount() {

            $this->announce = new Announce;
    }

    public function edit($announce_id) {

        $this->announce = Announce::find($announce_id);


    }

    
    
}
