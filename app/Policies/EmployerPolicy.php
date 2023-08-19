<?php

namespace App\Policies;

use App\Models\User;

class EmployerPolicy
{
    /**
     * Create a new policy instance.
     */
    public function create(User $user)
    {
        return $user->hasRole('admin');
    }

    public function edit(User $user, Employer $employer)
    {
        return $user->hasRole('admin') || ($user->hasRole('employer') && $user->id === $employer->user_id);
    }

    public function show(User $user, Employer $employer)
    {
        return $user->hasRole('admin') || ($user->hasRole('employer') && $user->id === $employer->user_id);
    }

    public function __construct()
    {
        //
    }
}
