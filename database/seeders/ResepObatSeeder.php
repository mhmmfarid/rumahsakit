<?php

namespace Database\Seeders;

use App\Models\ResepObat;
use Illuminate\Database\Seeder;

class ResepObatSeeder extends Seeder
{
    public function run(): void
    {
        ResepObat::factory()->count(20)->create();
    }
}