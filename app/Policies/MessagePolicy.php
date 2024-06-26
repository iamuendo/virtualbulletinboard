<?php

namespace App\Policies;

use App\Models\EventForum;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MessagePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, EventForum $message): bool
    {
        return $user->id === $message->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, EventForum $message): bool
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, EventForum $message): bool
    {
        return $user->id === $message->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, EventForum $message): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, EventForum $message): bool
    {
        //
    }
}
