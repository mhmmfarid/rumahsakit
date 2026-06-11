<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ObatFactory extends Factory
{
    private static array $kategoriList = [
        'Antibiotik', 'Analgesik', 'Antipiretik', 'Antihipertensi',
        'Antidiabetes', 'Vitamin', 'Antasida', 'Antihistamin',
        'Kortikosteroid', 'Antiinflamasi',
    ];

    private static array $namaObatList = [
        'Amoxicillin', 'Paracetamol', 'Ibuprofen', 'Metformin', 'Amlodipine',
        'Omeprazole', 'Simvastatin', 'Cetirizine', 'Dexamethasone', 'Ciprofloxacin',
        'Ranitidine', 'Antasida Doen', 'Vitamin C', 'Vitamin D', 'B-Complex',
        'Chlorphenamine', 'Captopril', 'Lisinopril', 'Metronidazole', 'Cefadroxil',
    ];

    private static int $counter = 0;

    public function definition(): array
    {
        $nama = self::$namaObatList[self::$counter % count(self::$namaObatList)];
        self::$counter++;

        return [
            'nama_obat' => $nama,
            'kategori'  => $this->faker->randomElement(self::$kategoriList),
            'stok'      => $this->faker->numberBetween(10, 500),
            'harga'     => $this->faker->numberBetween(2000, 150000),
        ];
    }
}