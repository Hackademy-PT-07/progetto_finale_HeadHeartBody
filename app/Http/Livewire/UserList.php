<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

class UserList extends Component
{
    public $users;

    protected $listeners = ["loadUser"];

    public function mount() {

        $this->loadUser();

    }

    public function render()
    {
        return view('livewire.user-list');
    }

    public function loadUser() {

        $this->users = User::OrderBy("created_at", "DESC")->get();
    }

    public function editUser($user_id) {

        $this->emitTo("user-form", "edit", $user_id);
    }

    public function deleteUser($user_id) {

        $user = User::find($user_id);

        $user->delete();

        $this->loadUser();
    }
}
