<?php

namespace App\Policies;

use App\User;
use App\Date;
use Illuminate\Auth\Access\HandlesAuthorization;

class DatePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any dates.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the date.
     *
     * @param  \App\User  $user
     * @param  \App\Date  $date
     * @return mixed
     */
    public function view(User $user, Date $date)
    {
        //
    }

    /**
     * Determine whether the user can create dates.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the date.
     *
     * @param  \App\User  $user
     * @param  \App\Date  $date
     * @return mixed
     */
    public function update(User $user, Date $date)
    {
        //
    }

    /**
     * Determine whether the user can delete the date.
     *
     * @param  \App\User  $user
     * @param  \App\Date  $date
     * @return mixed
     */
    public function delete(User $user, Date $date)
    {
        //
    }

    /**
     * Determine whether the user can restore the date.
     *
     * @param  \App\User  $user
     * @param  \App\Date  $date
     * @return mixed
     */
    public function restore(User $user, Date $date)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the date.
     *
     * @param  \App\User  $user
     * @param  \App\Date  $date
     * @return mixed
     */
    public function forceDelete(User $user, Date $date)
    {
        //
    }
}
