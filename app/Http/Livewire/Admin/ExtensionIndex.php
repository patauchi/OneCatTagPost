<?php

namespace App\Http\Livewire\Admin;

use App\Models\Destination;
use App\Models\Extension;
use Livewire\Component;
use Livewire\WithPagination;

class ExtensionIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;


   

    public function render()
    {
        $extensions = Extension::where('title','LIKE', '%' . $this->search. '%')
                        ->orwhereHas('destination', function ($query){
                                        $query->where('name', 'LIKE', '%' . $this->search. '%');
                                    })
                        ->latest('id')
                        ->paginate();

        return view('livewire.admin.extension-index', compact('extensions'));
    }
}
