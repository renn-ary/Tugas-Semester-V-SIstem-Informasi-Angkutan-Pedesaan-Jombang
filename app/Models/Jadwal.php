<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'angkutan_id',
        'hari',
        'jam_berangkat',
        'jam_selesai',
    ];

    protected $casts = [
        'jam_berangkat' => 'datetime:H:i',
        'jam_selesai' => 'datetime:H:i',
    ];

    public function angkutan()
    {
        return $this->belongsTo(Angkutan::class);
    }
}