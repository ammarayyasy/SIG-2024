<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('regencies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable(false);
            $table->string('alt_name');
            $table->double('latitude')->default(0);
            $table->double('longitude')->default(0);
            $table->bigInteger('population')->nullable();
            $table->double('pernikahan')->default(0)->nullable();
            $table->double('perceraian')->default(0)->nullable();
            $table->double('kelahiran')->default(0)->nullable();
            $table->enum('type_polygon', ['Polygon', 'MultiPolygon'])->default('Polygon')->nullable();
            $table->longText('polygon')->nullable();
            
            // Define foreign key to provinces
            $table->foreignId('province_id')->constrained('provinces')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regencies');
    }
};
