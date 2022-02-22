<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mata_pelajaran' => $this->faker->word(),
            'jumlah_jam' => $this->faker->randomElement(['1', '3']),
        ];
    }
}
