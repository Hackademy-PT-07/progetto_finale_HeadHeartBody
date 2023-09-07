<?php

namespace App\Http\Livewire;

use App\Jobs\RemoveFaces;

use App\Jobs\ResizeImage;

use Livewire\Component;

use Livewire\WithFileUploads;

use App\Models\Announce;

use App\Models\Category;

use App\Models\Image;

use Illuminate\Support\Facades\File;

use App\Jobs\GoogleVisionSafeSearch;

use App\Jobs\GoogleVisionLabelImage;

use App\Jobs\Watermark;

class AnnouncesForm extends Component
{
    use WithFileUploads;

    public $announce;

    public $images = [];

    public $temporary_images;

    public $dbImg;

    protected $listeners = ["edit"];

    protected $rules = [

        "announce.title" => "required|max:50",

        "announce.category_id" => "required",

        "announce.description" => "required|max:120",

        "announce.price" => "required",

        "images.*" => "image|max:1024",

        "temporary_images.*" => "image|max:1024",

    ];

    protected $messages = [

        "required" => "Il campo è obbligatorio",

        "announce.title.max:20" => "Massimo 20 caratteri",

        "images.*.image" => "Deve essere un file immagine",

        "images.*.max" => "Il file può essere massimo di 1mb",

        "temporary_images.*.image" => "Deve essere un file immagine",

        "temporary_images.*.max" => "Il file può essere massimo di 1mb",

    ];

    public function updateTemporaryImages()
    {

            foreach ($this->temporary_images as $img) {

                $this->images[] = $img;
            }
    }

    public function removeImages($key)
    {

        if (in_array($key, array_keys($this->images))) {

            unset($this->images[$key]);
        }
    }

    public function removeDbImages($key)
    {

        if ($this->dbImg->hasAny($key)) {
            
            $idImg = $this->dbImg[$key]->id;            
            
            $this->dbImg->forget($key);

            $image = Image::find($idImg);

            $image->delete();
        }


    }

    public function store()
    {

        $this->validate();
        
        $this->announce->user_id = auth()->user()->id;
                

        if (auth()->user()->role == "revisor" || auth()->user()->role == "admin") {

            $this->announce->is_accepted = true;
        }

        if($this->announce->is_accepted == 0) {

            $this->announce->is_accepted = null;
        }

        $this->announce->save();


        if (count($this->images)) {

            foreach ($this->images as $image) {

                //$this->announce->images()->create(['path' => $image->store('images', 'public')]);

                $newFileName = "announces/{$this->announce->id}";

                $newImage = $this->announce->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([                                                     
                    new ResizeImage($newImage->path, 400, 300),
                    new Watermark($newImage->id),                                      
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)                                      
               ])->dispatch($newImage->id);
            }
            
            File::deleteDirectory(storage_path("/app/livewire-tmp"));
        }

        session()->flash("message", "Operazione effettuata con successo!");

        $this->cleanForm();

        $this->emitTo("announces-list", "loadAnnounces");
    }

    public function render()
    {
        $categories = Category::orderBy("name", "ASC")->get();

        return view('livewire.announces-form', compact("categories"));
    }

    public function cleanForm()
    {

        $this->mount();
    }

    public function mount()
    {

        $this->announce = new Announce;

        $this->images = [];

        $this->temporary_images = "";

        $this->dbImg = "";
    }

    public function edit($announce_id)
    {

        $this->announce = Announce::find($announce_id);

        $this->dbImg = $this->announce->images;


    }
}
