<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kendaraan_id' => mt_rand(1,5),
            'supir_id' => mt_rand(1,5),
            'tanggal_berangkat' => $this->faker->dateTimeThisYear(),
            'jam_berangkat' => $this->faker->time(),
            'asal' => $this->faker->randomElement(['Mataram', 'Taliwang', 'Sumbawa Besar']),
            'tujuan' => $this->faker->randomElement(['Mataram', 'Taliwang', 'Sumbawa Besar']),
            'kapasitas' => 15,
            'kursi_dipesan' => $this->faker->numberBetween(0, 14),
            'harga' => $this->faker->randomElement(['50000', '120000', '180000'])
        ];
    }
}
