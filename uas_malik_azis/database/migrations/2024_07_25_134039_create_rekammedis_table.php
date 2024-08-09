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
        Schema::create('rekammedis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pasiens_id');
            $table->bigInteger('petugas_id');
            $table->string('keluhan');
            $table->string('diagnosa');
            $table->date('tanggal_periksa');
            $table->string('jam_periksa');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekammedis');
    }
};
