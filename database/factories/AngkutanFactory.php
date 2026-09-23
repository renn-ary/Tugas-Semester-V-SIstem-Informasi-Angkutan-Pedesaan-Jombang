<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AngkutanFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->company(),
            'kode' => fake()->unique()->bothify('ANG-###'),
            'jenis' => fake()->randomElement([
                'Angkutan Pedesaan',
                'Minibus',
            ]),
            'status_operasional' => fake()->randomElement([
                'aktif',
                'tidak_aktif',
            ]),
        ];
    }
}