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
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_logo")->nullable();
            $table->string("img_fondo")->nullable();
            $table->string("palabra1")->nullable();
            $table->string("palabra2")->nullable();
            $table->string("palabra3")->nullable();
            $table->string("word1")->nullable();
            $table->string("word2")->nullable();
            $table->string("word3")->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers');
    }
};
