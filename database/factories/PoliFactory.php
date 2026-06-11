<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PoliFactory extends Factory
{
    private static array $namaPoliList = [
        'Poli Umum', 'Poli Anak', 'Poli Kandungan', 'Poli Bedah',
        'Poli Jantung', 'Poli Paru', 'Poli Syaraf', 'Poli Mata',
        'Poli THT', 'Poli Kulit', 'Poli Gigi', 'Poli Ortopedi',
        'Poli Onkologi', 'Poli Urologi', 'Poli Penyakit Dalam',
        'Poli Rehabilitasi', 'Poli Psikiatri', 'Poli Gizi', 'Poli Fisioterapi', 'Poli Geriatri',
    ];

    private static int $counter = 0;

    public function definition(): array
    {
        $nama = self::$namaPoliList[self::$counter % count(self::$namaPoliList)];
        self::$counter++;

        return [
            'nama_poli' => $nama,
            'lokasi'    => 'Lantai ' . $this->faker->numberBetween(1, 5) . ', Gedung ' . $this->faker->randomElement(['A', 'B', 'C', 'D']),
        ];
    }
}