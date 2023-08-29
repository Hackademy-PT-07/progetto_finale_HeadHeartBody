<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Announce;

class AnnouncesList extends Component
{
    public $announces;

    protected $listeners = ["loadAnnounces"];

    public function loadAnnounces() {

        $this->mount();
        
    }

    public function render()
    {
        
        return view('livewire.announces-list');
    }

    public function mount() {

        $this->announces = Announce::where("user_id", auth()->user()->id)->orderBy("created_at", "DESC")->get();
        
    }

    public function editAnnounce($announce_id) {

        $this->emitTo("announces-form", "edit", $announce_id);
    }

    public function deleteAnnounce($announce_id) {

        
        $announce = Announce::find($announce_id);

        $announce->delete();

        $this->loadAnnounces();
    }
}
