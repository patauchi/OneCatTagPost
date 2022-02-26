<?php

namespace App\Http\Livewire\Admin;

use App\Models\Activity;
use Livewire\Component;
use Livewire\WithPagination;

class ActivityIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
   

    public function render()
    {
        $activities = Activity::where('title','LIKE', '%' . $this->search. '%')
                        ->orwhereHas('destination', function ($query){
                                        $query->where('name', 'LIKE', '%' . $this->search. '%');
                                    })
                        ->latest('id')
                        ->paginate();

        return view('livewire.admin.activity-index', compact('activities'));
    }
}
