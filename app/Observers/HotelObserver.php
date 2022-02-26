<?php

namespace App\Observers;

use App\Models\Hotel;
use Illuminate\Support\Facades\Storage;

class HotelObserver
{
    public function creating(Hotel $hotel)
    {
        if(! \App::runningInConsole()){
            $hotel->user_id = auth()->user()->id;
        }
    }

    
    public function deleting(Hotel $hotel)
    {
        if($hotel->image){
            Storage::delete('Public/hotels/' . $hotel->image->url);
            Storage::delete($hotel->image->url);
        }
    }
}
