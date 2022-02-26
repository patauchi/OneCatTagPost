<?php

namespace App\Http\Livewire;

use App\Models\Nation;
use Livewire\Component;


class Footer extends Component
{
    public function render()
    {
        $nations = Nation::all();   
        return view('livewire.footer',compact('nations'));
    }
}
