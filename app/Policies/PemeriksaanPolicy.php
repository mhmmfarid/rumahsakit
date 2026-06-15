<?php

namespace App\Policies;

use App\Models\Pemeriksaan;
use App\Models\User;

class PemeriksaanPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function view(User $user, Pemeriksaan $pemeriksaan): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function update(User $user, Pemeriksaan $pemeriksaan): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function delete(User $user, Pemeriksaan $pemeriksaan): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user, Pemeriksaan $pemeriksaan): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, Pemeriksaan $pemeriksaan): bool
    {
        return $user->hasRole('admin');
    }
}
