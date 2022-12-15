<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuctionsComponent extends Component
{
    public function render()
    {
        return view('livewire.auctions-component')->layout("layouts.front_auctions");
    }
}
