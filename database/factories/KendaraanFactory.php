<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_plat' => $this->generateIndonesianPlateNumber(),
            'tipe' => 'Minibus',
            'kapasitas' => '15',
            'keterangan' => $this->faker->sentence(mt_rand(0,10)),
        ];
    }

    public function generateIndonesianPlateNumber()
    {
        $provinceCode = strtoupper($this->faker->lexify('??')); // Dua huruf untuk kode provinsi
        $numbers = $this->faker->numberBetween(1000, 9999); // Empat digit angka
        $letters = strtoupper($this->faker->lexify('??')); // Dua huruf acak
        return "{$provinceCode} {$numbers} {$letters}";
    }
}
