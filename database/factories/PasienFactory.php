<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    public function definition(): array
    {
        return [
            'no_rm'          => null, // Di-generate oleh trigger MySQL
            'nama'           => $this->faker->name(),
            'jenis_kelamin'  => $this->faker->randomElement(['L', 'P']),
            'tanggal_lahir'  => $this->faker->dateTimeBetween('-70 years', '-5 years')->format('Y-m-d'),
            'alamat'         => $this->faker->address(),
            'no_hp'          => '08' . $this->faker->numerify('#########'),
            'foto_pasien'    => null,
        ];
    }
}