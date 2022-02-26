<?php

namespace App\Observers;

use App\Models\Activity;
use Illuminate\Support\Facades\Storage;

class ActivityObserver
{
    public function creating(Activity $activity)
    {
        if(! \App::runningInConsole()){
            $activity->user_id = auth()->user()->id;
        }
    }

    
    public function deleting(Activity $activity)
    {
        if($activity->image){
            Storage::delete('Public/' . $activity->image->url);
            Storage::delete($activity->image->url);
        }
    }
}
