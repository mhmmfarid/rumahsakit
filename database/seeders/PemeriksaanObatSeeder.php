<?php

namespace Database\Seeders;

use App\Models\Obat;
use App\Models\Pemeriksaan;
use Illuminate\Database\Seeder;

class PemeriksaanObatSeeder extends Seeder
{
    public function run(): void
    {
        $pemeriksaans = Pemeriksaan::all();
        $obats        = Obat::all();

        foreach ($pemeriksaans as $pemeriksaan) {
            $randomObats = $obats->random(rand(1, 3));
            foreach ($randomObats as $obat) {
                $pemeriksaan->obats()->attach($obat->id, [
                    'jumlah' => rand(1, 10),
                ]);
            }
        }
    }
}