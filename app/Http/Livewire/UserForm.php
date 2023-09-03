<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

class UserForm extends Component
{
    public $user;

    protected $listeners = ["edit"];

    protected function rules () {

        return [
        'user.name' => 'required|max:20|min:3',

        'user.email' => "required|email|unique:users,email," . $this->user->id,

        'user.role' => 'required',

        ];

    }

    protected $messages = [
        'user.name.required' => 'Il campo è obbligatorio',

        "user.name.max" => "Mssimo 20 caratteri",

        "user.name.min" => "Minimo 3 caratteri",

        'user.email.required' => 'Il campo è obbligatorio',

        'user.role.required' => 'Il campo è obbligatorio',

    ];

    public function storeUser() {

        $this->validate();

        $this->user->save();

        session()->flash("message", "Operazione eseguita con successo");

        $this->cleanForm();

        $this->emitTo("user-list", "loadUser");
    }


    public function render()
    {
        return view('livewire.user-form');
    }

    public function cleanForm() {

        $this->mount();
    }

    public function mount() {

        $this->user = new User;
    }

    public function edit($user_id) {

        $this->user = User::find($user_id);
    }
}
