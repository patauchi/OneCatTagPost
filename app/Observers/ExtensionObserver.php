<?php

namespace App\Observers;

use App\Models\Extension;
use Illuminate\Support\Facades\Storage;

class ExtensionObserver
{
    public function creating(Extension $extension)
    {
        if(! \App::runningInConsole()){
            $extension->user_id = auth()->user()->id;
        }
    }

    
    public function deleting(Extension $extension)
    {
        if($extension->image){
            Storage::delete('Public/' . $extension->image->url);
            Storage::delete($extension->image->url);
        }
    }
}
