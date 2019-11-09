<?php

namespace App\Policies;

use App\User;
use App\Officer;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfficerPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the officer.
     *
     * @param  \App\User  $user
     * @param  \App\Officer  $officer
     * @return mixed
     */
    public function view(User $user, Officer $officer)
    {
        //
    }

    /**
     * Determine whether the user can create officers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the officer.
     *
     * @param  \App\User  $user
     * @param  \App\Officer  $officer
     * @return mixed
     */
    public function update(User $user, Officer $officer)
    {
        //
    }

    /**
     * Determine whether the user can delete the officer.
     *
     * @param  \App\User  $user
     * @param  \App\Officer  $officer
     * @return mixed
     */
    public function delete(User $user, Officer $officer)
    {
        //
    }

    /**
     * Determine whether the user can restore the officer.
     *
     * @param  \App\User  $user
     * @param  \App\Officer  $officer
     * @return mixed
     */
    public function restore(User $user, Officer $officer)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the officer.
     *
     * @param  \App\User  $user
     * @param  \App\Officer  $officer
     * @return mixed
     */
    public function forceDelete(User $user, Officer $officer)
    {
        //
    }
}
