<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;

    protected $fillable = [
        'angkutan_id',
        'asal',
        'tujuan',
        'jalur',
    ];

    public function angkutan()
    {
        return $this->belongsTo(Angkutan::class);
    }

    public function titikPemberhentians()
    {
        return $this->hasMany(TitikPemberhentian::class);
    }
}