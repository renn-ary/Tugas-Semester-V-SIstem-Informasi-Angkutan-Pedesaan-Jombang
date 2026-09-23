<?php

namespace Database\Seeders;

use App\Models\Angkutan;
use App\Models\Jadwal;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    public function run(): void
    {
        Angkutan::all()->each(function ($angkutan) {
            Jadwal::create([
                'angkutan_id' => $angkutan->id,
                'hari' => fake()->randomElement([
                    'Senin',
                    'Selasa',
                    'Rabu',
                    'Kamis',
                    'Jumat',
                    'Sabtu',
                ]),
                'jam_berangkat' => fake()->time('H:i'),
                'jam_selesai' => fake()->time('H:i'),
            ]);
        });
    }
}