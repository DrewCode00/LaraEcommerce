<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SuperComponent extends Component
{
    public function render()
    {
        return view('livewire.super-component')->layout("layouts.front_super");
    }
}
