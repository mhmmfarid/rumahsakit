<?php

namespace App\Policies;

use App\Models\Obat;
use App\Models\User;

class ObatPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function view(User $user, Obat $obat): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function create(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function update(User $user, Obat $obat): bool
    {
        return $user->hasRole('admin');
    }

    public function delete(User $user, Obat $obat): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user, Obat $obat): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Obat $obat): bool
    {
        return $user->hasRole('admin');
    }
}
