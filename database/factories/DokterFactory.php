<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DokterFactory extends Factory
{
    private static array $spesialis = [
        'Umum', 'Penyakit Dalam', 'Anak', 'Bedah', 'Kandungan',
        'Jantung', 'Syaraf', 'Kulit', 'Mata', 'THT',
        'Gigi', 'Ortopedi', 'Paru', 'Urologi', 'Onkologi',
    ];

    public function definition(): array
    {
        return [
            'nama'        => 'Dr. ' . $this->faker->name(),
            'spesialis'   => $this->faker->randomElement(self::$spesialis),
            'no_hp'       => '08' . $this->faker->numerify('#########'),
            'alamat'      => $this->faker->address(),
            'foto_dokter' => null,
        ];
    }
}