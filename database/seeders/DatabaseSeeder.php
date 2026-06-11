<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RolePermissionSeeder::class,
            UserSeeder::class,
            PasienSeeder::class,
            DokterSeeder::class,
            PoliSeeder::class,
            ObatSeeder::class,
            PemeriksaanSeeder::class,
            PemeriksaanObatSeeder::class,
            ResepObatSeeder::class,
        ]);
    }
}