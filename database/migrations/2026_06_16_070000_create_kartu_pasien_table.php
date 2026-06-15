<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kartu_pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->unique()->constrained('pasiens')->onDelete('cascade');
            $table->string('nomor_kartu')->unique();
            $table->date('tanggal_terbit')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kartu_pasiens');
    }
};
