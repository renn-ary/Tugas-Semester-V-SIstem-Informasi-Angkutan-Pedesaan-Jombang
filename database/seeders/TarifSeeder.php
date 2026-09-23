<?php

namespace Database\Seeders;

use App\Models\Angkutan;
use App\Models\Tarif;
use Illuminate\Database\Seeder;

class TarifSeeder extends Seeder
{
    public function run(): void
    {
        Angkutan::all()->each(function ($angkutan) {
            Tarif::create([
                'angkutan_id' => $angkutan->id,
                'nominal' => fake()->numberBetween(2000, 15000),
                'keterangan' => 'Tarif perjalanan',
            ]);
        });
    }
}