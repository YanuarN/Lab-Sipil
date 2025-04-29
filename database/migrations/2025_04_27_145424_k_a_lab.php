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
        Schema::create('kepala_detail', function (Blueprint $table) {
            $table->unsignedBigInteger('kepala_lab_id');
            $table->unsignedBigInteger('lab_id');
            
            $table->foreign('kepala_lab_id')->references('id')->on('kepala_lab');
            $table->foreign('lab_id')->references('id')->on('lab');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_lab_lab');
    }
};
