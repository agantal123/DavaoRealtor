<?php

namespace App\Policies;

use App\Models\User;
use App\Models\listingservices;
use Illuminate\Auth\Access\HandlesAuthorization;

class ListingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\listingservices  $listingservices
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, listingservices $listingservices)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
       // return $user->user_role == 2;
       
        //admin & broker
        return in_array($user->user_role, [1,2]);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\listingservices  $listingservices
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, listingservices $listingservices)
    {
        //admin
        return $user->user_role == 1;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\listingservices  $listingservices
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, listingservices $listingservices)
    {
        //admin & broker
        return $user->user_role == 1;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\listingservices  $listingservices
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, listingservices $listingservices)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\listingservices  $listingservices
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, listingservices $listingservices)
    {
        //
    }
}
