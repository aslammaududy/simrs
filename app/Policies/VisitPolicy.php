<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Visit;
use Illuminate\Auth\Access\HandlesAuthorization;

class VisitPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {
        return in_array($user->role, ['admin', 'registration_staff']);
    }

    public function view(User $user, Visit $visit): bool
    {
        return in_array($user->role, ['admin', 'registration_staff']);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, ['admin', 'registration_staff']);
    }

    public function update(User $user, Visit $visit): bool
    {
        return in_array($user->role, ['admin', 'registration_staff']);
    }

    public function delete(User $user, Visit $visit): bool
    {
        return $user->role == 'admin';
    }

    public function restore(User $user, Visit $visit): bool
    {
        return $user->role == 'admin';
    }

    public function forceDelete(User $user, Visit $visit): bool
    {
        return $user->role == 'admin';
    }
}
