<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('check_ins', function (Blueprint $table) {
            $table->id();

            // Peserta yang melakukan check-in
            $table->foreignId('event_participant_id')
                ->constrained('event_participants')
                ->onDelete('cascade');

            // Waktu kehadiran
            $table->timestamp('checked_in_at')->nullable();

            // Kode atau token check-in jika diperlukan
            $table->string('check_in_code')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('check_ins');
    }
};