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
        Schema::create('event_participants', function (Blueprint $table) {
            $table->id();

            // Event yang diikuti
            $table->foreignId('event_id')
                ->constrained('events')
                ->onDelete('cascade');

            // Pengguna yang mengikuti event
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            // Status keikutsertaan volunteer
            $table->enum('status', [
                'registered',
                'checked_in',
                'completed',
                'cancelled'
            ])->default('registered');

            // Mencegah satu pengguna mendaftar dua kali pada event yang sama
            $table->unique(['event_id', 'user_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_participants');
    }
};