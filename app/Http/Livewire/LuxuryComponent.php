<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LuxuryComponent extends Component
{
    public function render()
    {
        return view('livewire.luxury-component')->layout("layouts.base");
    }
}
