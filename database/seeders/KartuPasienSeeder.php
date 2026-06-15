<?php

namespace Database\Seeders;

use App\Models\KartuPasien;
use App\Models\Pasien;
use Illuminate\Database\Seeder;

class KartuPasienSeeder extends Seeder
{
    public function run(): void
    {
        $pasiens = Pasien::all();

        foreach ($pasiens as $pasien) {
            KartuPasien::firstOrCreate(
                ['pasien_id' => $pasien->id],
                [
                    'nomor_kartu' => 'KP-' . str_pad($pasien->id, 8, '0', STR_PAD_LEFT),
                    'tanggal_terbit' => now()->toDateString(),
                ]
            );
        }
    }
}
