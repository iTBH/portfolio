<?php

namespace App\Policies;

use App\User;
use App\Location;
use Illuminate\Auth\Access\HandlesAuthorization;

class LocationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the location.
     *
     * @param  \App\User $user
     * @param  \App\Location $location
     * @return mixed
     */
    public function view(User $user, Location $location)
    {
        return $user->id === $location->user_id;
    }

    /**
     * Determine whether the user can update the location.
     *
     * @param  \App\User $user
     * @param  \App\Location $location
     * @return mixed
     */
    public function update(User $user, Location $location)
    {
        return $user->id === $location->user_id;
    }

    /**
     * Determine whether the user can delete the location.
     *
     * @param  \App\User $user
     * @param  \App\Location $location
     * @return mixed
     */
    public function delete(User $user, Location $location)
    {
        return $user->id === $location->user_id;
    }
}
