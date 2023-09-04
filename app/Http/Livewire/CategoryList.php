<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Category;

class CategoryList extends Component
{
    public $categories;

    protected $listeners = ["loadCategory"];

    public function mount() {

        $this->loadCategory();
    }

    public function render()
    {
        return view('livewire.category-list');
    }

    public function loadCategory() {

        $this->categories = Category::OrderBy("created_at", "DESC")->get();
    }

    public function editCategory($category_id) {

        $this->emitTo("category-form", "edit", $category_id);
    }

    public function deleteCategory($category_id) {

        $category = Category::find($category_id);

        $category->delete();

        $this->loadCategory();
    }
}
