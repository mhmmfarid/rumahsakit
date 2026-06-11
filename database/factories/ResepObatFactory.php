<?php

namespace Database\Factories;

use App\Models\Pemeriksaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResepObatFactory extends Factory
{
    private static array $dosisList = [
        '3x1 tablet', '2x1 tablet', '1x1 tablet', '3x1 kapsul',
        '2x1 kapsul', '1x1 kapsul', '3x5ml', '2x5ml', '1x10ml',
    ];

    public function definition(): array
    {
        return [
            'pemeriksaan_id' => Pemeriksaan::inRandomOrder()->first()?->id ?? Pemeriksaan::factory(),
            'nama_obat'      => $this->faker->randomElement([
                'Paracetamol', 'Amoxicillin', 'Ibuprofen', 'Vitamin C', 'Antasida',
                'Metformin', 'Cetirizine', 'Omeprazole', 'B-Complex', 'Dexamethasone',
            ]),
            'dosis'          => $this->faker->randomElement(self::$dosisList),
            'jumlah'         => $this->faker->numberBetween(1, 30),
        ];
    }
}