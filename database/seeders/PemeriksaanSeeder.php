<?php

namespace Database\Seeders;

use App\Models\Pemeriksaan;
use Illuminate\Database\Seeder;

class PemeriksaanSeeder extends Seeder
{
    public function run(): void
    {
        Pemeriksaan::factory()->count(20)->create();
    }
}
