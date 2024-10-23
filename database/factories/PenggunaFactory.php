<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'no_hp' => $this->faker->phoneNumber(),
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->email(),
            'password' => $this->faker->password(6,20)
        ];
    }
}
