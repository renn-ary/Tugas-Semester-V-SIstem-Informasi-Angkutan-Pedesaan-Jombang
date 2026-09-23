<?php

namespace Database\Seeders;

use App\Models\Angkutan;
use App\Models\User;
use App\Models\Verifikasi;
use Illuminate\Database\Seeder;

class VerifikasiSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        if (!$user) {
            $user = User::factory()->create();
        }

        Angkutan::all()->each(function ($angkutan) use ($user) {
            Verifikasi::create([
                'angkutan_id' => $angkutan->id,
                'user_id' => $user->id,
                'status' => 'terverifikasi',
                'catatan' => 'Data telah diverifikasi.',
                'verified_at' => now(),
            ]);
        });
    }
}