<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_induk' => $this->faker->randomNumber(8),
            'nama_guru' => $this->faker->name(),
            'jk' => $this->faker->randomElement(['pria', 'wanita']),
            'telp' => $this->faker->phoneNumber(),
            'kode_pelajaran' => rand(1,6),
            'alamat' =>$this->faker->address(),
        ];
    }
}
