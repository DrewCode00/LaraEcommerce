<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MemberComponent extends Component
{
    public function render()
    {
        return view('livewire.member-component')->layout("layouts.base");
    }
}
