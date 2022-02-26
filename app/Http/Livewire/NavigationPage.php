<?php

namespace App\Http\Livewire;

use App\Models\Nation;
use Livewire\Component;

class NavigationPage extends Component
{
    public function render()
    {
        $nations = Nation::where('status',2)
                ->get();   
        return view('livewire.navigation-page', compact('nations'));
    }
}
