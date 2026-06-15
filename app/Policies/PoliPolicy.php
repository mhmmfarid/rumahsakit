<?php

namespace App\Policies;

use App\Models\Poli;
use App\Models\User;

class PoliPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function view(User $user, Poli $poli): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function create(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, Poli $poli): bool
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user, Poli $poli): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user, Poli $poli): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Poli $poli): bool
    {
        return $user->hasRole('admin');
    }
}
