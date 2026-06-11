<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'poli_id',
        'tanggal_periksa',
        'keluhan',
        'diagnosa',
        'biaya',
    ];

    protected $casts = [
        'tanggal_periksa' => 'date',
        'biaya'           => 'decimal:2',
    ];

    public function pasien(): BelongsTo
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class);
    }

    public function poli(): BelongsTo
    {
        return $this->belongsTo(Poli::class);
    }

    // Many To Many: Pemeriksaan memiliki banyak Obat
    public function obats(): BelongsToMany
    {
        return $this->belongsToMany(Obat::class, 'pemeriksaan_obat')
                    ->withPivot('jumlah')
                    ->withTimestamps();
    }

    // One To Many: Pemeriksaan memiliki banyak ResepObat
    public function resepObats(): HasMany
    {
        return $this->hasMany(ResepObat::class);
    }
}