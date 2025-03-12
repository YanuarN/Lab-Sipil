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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->integer('nim');
            $table->integer('nomor');
            $table->enum('prodi', ['Sarjana Teknik Sipil', 'Magister Teknik Sipil']);
            $table->string('judul_penelitian');
            $table->foreignId('lab_tujuan')->constrained('lab')->onDelete('cascade');
            $table->foreignId('pembimbing')->constrained('dosen')->onDelete('cascade');
            $table->foreignId('penguji1')->constrained('dosen')->onDelete('cascade');
            $table->foreignId('penguji2')->constrained('dosen')->onDelete('cascade');
            $table->string('instansi');
            $table->string('alamat_di_solo');
            $table->string('alamat_rumah');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status', ['daftar', 'proses', 'selesai']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book');
    }
};
