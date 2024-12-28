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
        Schema::create('data_regencies', function (Blueprint $table) {
            $table->id();
            $table->integer('tahun');
            $table->unsignedBigInteger('nama_data');
            $table->unsignedBigInteger('kabupaten_id');
            $table->double('jumlah');
            $table->timestamps();

            // Foreign key to name_data table
            $table->foreign('nama_data')->references('id')->on('name_data')->onDelete('cascade');
            // Foreign key to regencies table
            $table->foreign('kabupaten_id')->references('id')->on('regencies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_regencies');
    }
};
