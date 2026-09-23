<?php

namespace Database\Seeders;

use App\Models\Angkutan;
use App\Models\Rute;
use Illuminate\Database\Seeder;

class RuteSeeder extends Seeder
{
    public function run(): void
    {
        Angkutan::all()->each(function ($angkutan) {
            Rute::create([
                'angkutan_id' => $angkutan->id,
                'asal' => fake()->city(),
                'tujuan' => fake()->city(),
                'jalur' => fake()->sentence(),
            ]);
        });
    }
}