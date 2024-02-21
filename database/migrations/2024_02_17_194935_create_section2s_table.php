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
        Schema::create('section2s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_fondo")->nullable();
            $table->string("palabra1")->nullable();
            $table->string("word1")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section2s');
    }
};
