<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Category;

class CategoryForm extends Component
{
    public $category;

    protected $rules = ["category.name" => "required|max:20|min:3",];


    protected $messages = [

        "category.name.required" => "Il campo è obbligatorio",

        "category.name.max" => "Mssimo 20 caratteri",

        "category.name.min" => "Minimo 3 caratteri",

    ];

    protected $listeners = ["edit"];


    public function storeCategory()
    {
        $this->validate();

        $this->category->save();

        session()->flash("message", "Operazione eseguita con successo");

        $this->cleanForm();

        $this->emitTo("category-list", "loadCategory");

    }

    public function render()
    {
        return view('livewire.category-form');
    }

    public function cleanForm() {

        $this->mount();
    }

    public function mount() {

        $this->category = new Category;
    }
    
    public function edit($category_id) {

        $this->category = Category::find($category_id);
    }

}
