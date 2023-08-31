<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;

use App\Models\Announce;

use App\Models\Category;


class AnnouncesForm extends Component
{
    use WithFileUploads;

    public $announce;

    public $images = [];

    public $temporaryImages;

    protected $listeners = ["edit"];

    protected $rules = [
        
        "announce.title" => "required|max:50",

        "announce.category_id" => "required",

        "announce.description" => "required|max:120",

        "announce.price" => "required",


    ];

    protected $messages = [
        
        "required" => "Il campo è obbligatorio",

        "announce.title.max:50" => "Massimo 50 caratteri",

    ];
   


    public function store() {

        $this->validate();

        $this->announce->user_id = auth()->user()->id;

        if(auth()->user()->role == "revisor") {

            $this->announce->is_accepted = true;
        }

        $this->announce->save();

        if($this->img && $this->img->isValid()){
            
            $extension = $this->img->extension();
            
            $randomName = uniqid("announce_img_") . ".$extension";
            
            $imgPath = $this->img->storeAs("public/image" . $this->announce->id, $randomName);
            
            $this->announce->img = $imgPath;
            
            $this->announce->save();
            
        }
        
        //dd($this->announce);

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
