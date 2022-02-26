<?php

namespace App\Observers;

use App\Models\Destination;
use Illuminate\Support\Facades\Storage;

class DestinationObserver
{
    public function creating(Destination $destination)
    {
        if(! \App::runningInConsole()){
            $destination->user_id = auth()->user()->id;
        }
    }

    
    public function deleting(Destination $destination)
    {
        if($destination->image){
            Storage::delete('Public/' . $destination->image->url);
            Storage::delete($destination->image->url);
        }
    }
}
