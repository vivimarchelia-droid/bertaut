<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sertifikats', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');

            $table->foreignId('kegiatan_id')
                ->constrained('kegiatans')
                ->onDelete('cascade');

            $table->string('nomor_sertifikat')->unique();

            $table->timestamp('tanggal_terbit')->nullable();

            $table->timestamps();

            $table->unique(['user_id', 'kegiatan_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sertifikats');
    }
};
