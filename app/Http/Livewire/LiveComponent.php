<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveComponent extends Component
{
    public function render()
    {
        return view('livewire.live-component')->layout("layouts.front_live");
    }
}
