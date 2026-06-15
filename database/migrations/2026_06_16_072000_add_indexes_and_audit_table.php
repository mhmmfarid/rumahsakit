<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->index('no_rm');
        });

        Schema::table('obats', function (Blueprint $table) {
            $table->index('nama_obat');
        });

        Schema::table('pemeriksaans', function (Blueprint $table) {
            $table->index('tanggal_periksa');
        });

        Schema::create('audit_pasiens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id')->nullable();
            $table->string('nama')->nullable();
            $table->text('alasan')->nullable();
            $table->json('payload')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('pasiens', function (Blueprint $table) {
            $table->dropIndex(['no_rm']);
        });

        Schema::table('obats', function (Blueprint $table) {
            $table->dropIndex(['nama_obat']);
        });

        Schema::table('pemeriksaans', function (Blueprint $table) {
            $table->dropIndex(['tanggal_periksa']);
        });

        Schema::dropIfExists('audit_pasiens');
    }
};
