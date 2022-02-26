<?php

namespace App\Policies;

use App\Models\Nation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function author(User $user, Nation $nation)
    {
        if ($user->id == $nation->user_id) {
            return true;
        } else {
            return false;
        }
    }
    public function published(?User $user, Nation $nation)
    {
        if ($nation->status == 2) {
            return true;
        } else {
            return false;
        }
    }
}
