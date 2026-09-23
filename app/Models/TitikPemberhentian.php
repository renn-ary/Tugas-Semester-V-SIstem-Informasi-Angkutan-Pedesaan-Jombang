<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TitikPemberhentian extends Model
{
    use HasFactory;

    protected $fillable = [
        'rute_id',
        'nama',
        'urutan',
    ];

    public function rute()
    {
        return $this->belongsTo(Rute::class);
    }
}