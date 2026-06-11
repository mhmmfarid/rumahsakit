<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'foto_pasien',
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    // One To Many: Pasien memiliki banyak Pemeriksaan
    public function pemeriksaans(): HasMany
    {
        return $this->hasMany(Pemeriksaan::class);
    }

    // One To One: Pasien memiliki satu Pemeriksaan Terakhir
    public function pemeriksaanTerakhir(): HasOne
    {
        return $this->hasOne(Pemeriksaan::class)->latestOfMany();
    }
}