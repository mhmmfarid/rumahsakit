<?php

namespace Database\Factories;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Poli;
use Illuminate\Database\Eloquent\Factories\Factory;

class PemeriksaanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'pasien_id'       => Pasien::inRandomOrder()->first()?->id ?? Pasien::factory(),
            'dokter_id'       => Dokter::inRandomOrder()->first()?->id ?? Dokter::factory(),
            'poli_id'         => Poli::inRandomOrder()->first()?->id ?? Poli::factory(),
            'tanggal_periksa' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'keluhan'         => $this->faker->sentence(10),
            'diagnosa'        => $this->faker->sentence(8),
            'biaya'           => $this->faker->numberBetween(50000, 500000),
        ];
    }
}