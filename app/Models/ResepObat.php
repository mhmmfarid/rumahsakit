<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ResepObat extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemeriksaan_id',
        'nama_obat',
        'dosis',
        'jumlah',
    ];

    public function pemeriksaan(): BelongsTo
    {
        return $this->belongsTo(Pemeriksaan::class);
    }
}