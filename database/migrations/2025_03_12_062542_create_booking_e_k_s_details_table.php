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
        Schema::create('booking_eks_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('booking_eksternal')->onDelete('cascade');
            $table->foreignId('jenis_tes')->constrained('daftar_harga')->onDelete('cascade');
            $table->integer('jumlah_pengetasan');
            $table->integer('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_e_k_s_details');
    }
};
