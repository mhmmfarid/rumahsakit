<?php

namespace App\Policies;

use App\Models\Dokter;
use App\Models\User;

class DokterPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function view(User $user, Dokter $dokter): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function create(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, Dokter $dokter): bool
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user, Dokter $dokter): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user, Dokter $dokter): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Dokter $dokter): bool
    {
        return $user->hasRole('admin');
    }
}
