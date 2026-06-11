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
            'kelola pemeriksaan',
            'kelola obat',
            'kelola resep',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Buat Role Admin — akses penuh
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->syncPermissions($permissions);

        // Buat Role Petugas — hanya view, create, update (tanpa delete)
        $petugas = Role::firstOrCreate(['name' => 'petugas']);
        $petugas->syncPermissions($permissions); // Permission dikontrol di Policy
    }
}