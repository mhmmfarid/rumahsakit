<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TagArtikel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tag',
        'slug',
    ];

    public function artikels(): BelongsToMany
    {
        return $this->belongsToMany(Artikel::class, 'artikel_tag')->withTimestamps();
    }
}
