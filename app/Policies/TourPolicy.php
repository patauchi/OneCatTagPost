<?php

namespace App\Policies;

use App\Models\Tour;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TourPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        return true;
    }

    public function author(User $user, Tour $tour)
    {
        if ($user->id == $tour->user_id) {
            return true;
        } else {
            return false;
        }
    }
    public function published(?User $user, Tour $tour)
    {
        if ($tour->status == 2) {
            return true;
        } else {
            return false;
        }
    }
}
