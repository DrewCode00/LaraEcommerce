<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AncientComponent extends Component
{
    public function render()
    {
        return view('livewire.ancient-component')->layout("layouts.front_ancient");
    }
}
