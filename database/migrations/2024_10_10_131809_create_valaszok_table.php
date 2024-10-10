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
        Schema::create('valaszok', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kerdes_id')->constrained('kerdesek')->onDelete('cascade');
            $table->text('valasz');
            $table->boolean('helyes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valaszok');
    }
};
