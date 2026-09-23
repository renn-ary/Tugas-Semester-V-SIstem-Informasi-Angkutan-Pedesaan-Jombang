<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AngkutanSeeder::class,
            RuteSeeder::class,
            JadwalSeeder::class,
            TarifSeeder::class,
            VerifikasiSeeder::class,
        ]);
    }
}