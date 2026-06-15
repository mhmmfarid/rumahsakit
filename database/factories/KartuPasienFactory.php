<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class KartuPasienFactory extends Factory
{
    public function definition(): array
    {
        return [
            'pasien_id' => null,
            'nomor_kartu' => 'KP-' . $this->faker->unique()->numerify('########'),
            'tanggal_terbit' => $this->faker->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
        ];
    }
}
