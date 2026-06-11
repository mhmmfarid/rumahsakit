<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori_artikel_id',
        'dokter_id',
        'judul',
        'slug',
        'thumbnail',
        'excerpt',
        'isi',
        'status',
        'tanggal_publish',
        'view_count',
    ];

    protected $casts = [
        'tanggal_publish' => 'datetime',
        'view_count' => 'integer',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(KategoriArtikel::class, 'kategori_artikel_id');
    }

    public function dokter(): BelongsTo
    {
        return $this->belongsTo(Dokter::class);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(TagArtikel::class, 'artikel_tag')->withTimestamps();
    }

    public function komentars(): HasMany
    {
        return $this->hasMany(Komentar::class);
    }
}
