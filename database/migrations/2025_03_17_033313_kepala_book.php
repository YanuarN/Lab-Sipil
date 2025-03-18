<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('booking', function (Blueprint $table) {
            // Menambahkan kolom kepala sebagai foreign key
            $table->foreignId('kepala')
                  ->nullable() // Mengizinkan nilai NULL
                  ->constrained('kepala_lab')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking', function (Blueprint $table) {
            // Menghapus foreign key dan kolom kepala
            $table->dropForeign(['kepala']);
            $table->dropColumn('kepala');
        });
    }
};
