<?php

namespace App\Observers;

use App\Models\Tour;
use Illuminate\Support\Facades\Storage;

class TourObserver
{
    public function creating(Tour $tour)
    {
        if(! \App::runningInConsole()){
            $tour->user_id = auth()->user()->id;
        }
    }

    
    public function deleting(Tour $tour)
    {
        if($tour->image){
            Storage::delete('Public/' . $tour->image->url);
            Storage::delete($tour->image->url);
        }
    }
}
