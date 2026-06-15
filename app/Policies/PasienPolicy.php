<?php

namespace App\Policies;

use App\Models\Pasien;
use App\Models\User;

class PasienPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function view(User $user, Pasien $pasien): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function update(User $user, Pasien $pasien): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function delete(User $user, Pasien $pasien): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user, Pasien $pasien): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Pasien $pasien): bool
    {
        return $user->hasRole('admin');
    }
}
