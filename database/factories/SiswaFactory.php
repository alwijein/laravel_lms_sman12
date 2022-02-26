<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
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
            'nama_siswa' => $this->faker->name(),
            'jk' => $this->faker->randomElement(['pria', 'wanita']),
            'kode_kelas' => rand(1, 4),
            'telp' => $this->faker->phoneNumber(),
            'alamat' => $this->faker->address(),
            'tmp_lahir' =>$this->faker->address(),
            'tgl_lahir' => $this->faker->date(),
        ];
    }
}
