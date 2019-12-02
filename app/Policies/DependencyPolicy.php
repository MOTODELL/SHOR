<?php

namespace App\Policies;

use App\User;
use App\Dependency;
use Illuminate\Auth\Access\HandlesAuthorization;

class DependencyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any dependencies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->hasRole('admin')) {
            return true;
        } else {
            return false; 
        }
    }

    /**
     * Determine whether the user can view the dependency.
     *
     * @param  \App\User  $user
     * @param  \App\Dependency  $dependency
     * @return mixed
     */
    public function view(User $user, Dependency $dependency)
    {
        if ($user->hasRole('admin')) {
            return true;
        } else {
            return false; 
        }
    }

    /**
     * Determine whether the user can create dependencies.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasRole('admin')) {
            return true;
        } else {
            return false; 
        }
    }

    /**
     * Determine whether the user can update the dependency.
     *
     * @param  \App\User  $user
     * @param  \App\Dependency  $dependency
     * @return mixed
     */
    public function update(User $user, Dependency $dependency)
    {
        if ($user->hasRole('admin')) {
            return true;
        } else {
            return false; 
        }
    }

    /**
     * Determine whether the user can delete the dependency.
     *
     * @param  \App\User  $user
     * @param  \App\Dependency  $dependency
     * @return mixed
     */
    public function delete(User $user, Dependency $dependency)
    {
        if ($user->hasRole('admin')) {
            return true;
        } else {
            return false; 
        }
    }

    /**
     * Determine whether the user can restore the dependency.
     *
     * @param  \App\User  $user
     * @param  \App\Dependency  $dependency
     * @return mixed
     */
    public function restore(User $user, Dependency $dependency)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the dependency.
     *
     * @param  \App\User  $user
     * @param  \App\Dependency  $dependency
     * @return mixed
     */
    public function forceDelete(User $user, Dependency $dependency)
    {
        //
    }
}
