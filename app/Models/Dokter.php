<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'spesialis',
        'no_hp',
        'alamat',
        'foto_dokter',
    ];

    // One To Many: Dokter memiliki banyak Pemeriksaan
    public function pemeriksaans(): HasMany
    {
        return $this->hasMany(Pemeriksaan::class);
    }
}