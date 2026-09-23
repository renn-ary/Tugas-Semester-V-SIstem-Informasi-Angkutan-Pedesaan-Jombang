<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'angkutan_id',
        'user_id',
        'status',
        'catatan',
        'verified_at',
    ];

    protected $casts = [
        'verified_at' => 'datetime',
    ];

    public function angkutan()
    {
        return $this->belongsTo(Angkutan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}