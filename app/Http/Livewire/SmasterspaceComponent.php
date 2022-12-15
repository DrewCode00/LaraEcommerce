<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SmasterspaceComponent extends Component
{
    public function render()
    {
        return view('livewire.smasterspace-component')->layout("layouts.base");
    }
}
