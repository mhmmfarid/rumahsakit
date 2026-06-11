<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'artikel_id',
        'nama',
        'email',
        'isi',
        'status',
        'tanggal_komentar',
    ];

    protected $casts = [
        'tanggal_komentar' => 'datetime',
    ];

    public function artikel(): BelongsTo
    {
        return $this->belongsTo(Artikel::class);
    }
}
