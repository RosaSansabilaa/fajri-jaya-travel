<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupirFactory extends Factory
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
            'alamat' => $this->faker->address(),
            'username' => $this->faker->unique()->userName(),
            'password' => $this->faker->password(6,20)

        ];
    }
}
