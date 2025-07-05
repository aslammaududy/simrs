<?php

namespace App\Policies;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'registration_staff']);
    }

    public function view(User $user, Patient $patient): bool
    {
        return in_array($user->role, ['admin', 'registration_staff']);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'registration_staff']);
    }

    public function update(User $user, Patient $patient): bool
    {
        return in_array($user->role, ['admin', 'registration_staff']);
    }

    public function delete(User $user, Patient $patient): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Patient $patient): bool
    {
        return $user->role === 'admin';
    }

    public function forceDelete(User $user, Patient $patient): bool
    {
        return $user->role === 'admin';
    }
}
