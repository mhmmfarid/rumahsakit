<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@simrs.com'],
            [
                'name'     => 'Administrator',
                'password' => Hash::make('password'),
            ]
        );
        $admin->assignRole('admin');

        // Petugas
        $petugas = User::firstOrCreate(
            ['email' => 'petugas@simrs.com'],
            [
                'name'     => 'Petugas Medis',
                'password' => Hash::make('password'),
            ]
        );
        $petugas->assignRole('petugas');
    }
}