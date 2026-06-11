<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artikel_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('artikel_id')->constrained('artikels')->cascadeOnDelete();
            $table->foreignId('tag_artikel_id')->constrained('tag_artikels')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['artikel_id', 'tag_artikel_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artikel_tag');
    }
};
