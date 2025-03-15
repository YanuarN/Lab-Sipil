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
        Schema::create('booking_eksternal', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('nama_proyek');
            $table->date('tanggal_tes');
            $table->date('tanggal_pemesanan')->default(now());
            $table->integer('total_biaya');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_eksternals');
    }
};
