<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuPasien extends Model
{
    use HasFactory;

    protected $table = 'kartu_pasiens';

    protected $fillable = [
        'pasien_id',
        'nomor_kartu',
        'tanggal_terbit',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
