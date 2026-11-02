<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('peserta_kegiatans', function (Blueprint $table) {

            $table->string('nama_lengkap')->nullable();
            $table->string('email')->nullable();
            $table->string('no_hp', 20)->nullable();
            $table->string('instansi')->nullable();

            $table->enum('status_kehadiran', [
                'belum_diperiksa',
                'hadir',
                'tidak_hadir'
            ])->default('belum_diperiksa');

        });
    }

    public function down(): void
    {
        Schema::table('peserta_kegiatans', function (Blueprint $table) {

            $table->dropColumn([
                'nama_lengkap',
                'email',
                'no_hp',
                'instansi',
                'status_kehadiran'
            ]);

        });
    }
};