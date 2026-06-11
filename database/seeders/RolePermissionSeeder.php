<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cache
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Buat permissions
        $permissions = [
            'kelola pasien',
            'kelola dokter',
            'kelola poli',
            'kelola obat',
            'kelola pemeriksaan',
            'kelola resep',
            'kelola kategori artikel',
            'kelola tag artikel',
            'kelola artikel',
            'kelola komentar',
            'kelola newsletter',
            'kelola user',
            'kelola role',
            'kelola permission',
            'kelola konfigurasi',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Buat Role Admin — akses penuh
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->syncPermissions($permissions);

        // Buat Role Petugas — hanya area pelayanan dan pendaftaran pasien
        $petugas = Role::firstOrCreate(['name' => 'petugas']);
        $petugas->syncPermissions([
            'kelola pasien',
            'kelola pemeriksaan',
            'kelola resep',
        ]);
    }
}