<?php

namespace App\Policies;

use App\Models\ResepObat;
use App\Models\User;

class ResepObatPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function view(User $user, ResepObat $resepObat): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function create(User $user): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function update(User $user, ResepObat $resepObat): bool
    {
        return $user->hasAnyRole(['admin', 'petugas']);
    }

    public function delete(User $user, ResepObat $resepObat): bool
    {
        return $user->hasRole('admin');
    }

    public function deleteAny(User $user): bool
    {
        return $user->hasRole('admin');
    }

    public function restore(User $user, ResepObat $resepObat): bool
    {
        return $user->hasRole('admin');
    }

    public function forceDelete(User $user, ResepObat $resepObat): bool
    {
        return $user->hasRole('admin');
    }
}
