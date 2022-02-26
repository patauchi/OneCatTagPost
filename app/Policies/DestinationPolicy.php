<?php

namespace App\Policies;

use App\Models\Destination;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DestinationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }


public function author(User $user, Destination $destination){
    if($user->id == $destination->user_id){
        return true;
    } else{
        return false;
    }

}
public function published(?User $user, Destination $destination)
{
    if($destination->status == 2){
        return true;
    } else{
        return false;
    }
}
}
