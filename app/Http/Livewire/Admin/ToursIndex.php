<?php

namespace App\Http\Livewire\Admin;

use App\Models\Plan;
use App\Models\Tour;
use Livewire\Component;
use Livewire\WithPagination;

class ToursIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;
    public $sort = 'id';
    public $direction = 'desc';

    //public

    public function render()
    {

        $tours = Tour::where('user_id', auth()->user()->id)
                    ->where('name','LIKE', '%' . $this->search . '%')
                   // ->orwhere('destination','LIKE', '%' . $this->search)
                   // ->orWhere('nation','LIKE', '%' . $this->search)
                   // ->orderby($this->sort, $this->direction)
                    ->paginate();   

        return view('livewire.admin.tours-index', compact('tours'));
    }

    // public function itinerario(Tour $tour){
    //     $this->tour = $tour;

    //     $plans = Plan::where('tour_id', $tour->id)->get();
    //     return $plans;

    // }
}
