<?php

namespace Database\Seeders;

use App\Models\Angkutan;
use Illuminate\Database\Seeder;

class AngkutanSeeder extends Seeder
{
    public function run(): void
    {
        Angkutan::factory()->count(10)->create();
    }
}