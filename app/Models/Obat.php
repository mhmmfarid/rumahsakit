<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'kategori',
        'stok',
        'harga',
    ];

    protected $casts = [
        'harga' => 'decimal:2',
        'stok'  => 'integer',
    ];

    // Many To Many: Obat digunakan di banyak Pemeriksaan
    public function pemeriksaans(): BelongsToMany
    {
        return $this->belongsToMany(Pemeriksaan::class, 'pemeriksaan_obat')
                    ->withPivot('jumlah')
                    ->withTimestamps();
    }
}