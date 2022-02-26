<?php

namespace App\Observers;

use App\Models\Nation;
use Illuminate\Support\Facades\Storage;

class NationObserver
{
    public function creating(Nation $nation)
    {
        if(! \App::runningInConsole()){
            $nation->user_id = auth()->user()->id;
        }
    }

    
    public function deleting(Nation $nation)
    {
        if($nation->image){
            Storage::delete('Public/nations' . $nation->image->url);
            Storage::delete($nation->image->url);
        }
    }
}
