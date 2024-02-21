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
        Schema::create('ourservices', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_fondo")->nullable();
            $table->string("titulo")->nullable();
            $table->string("subtitulo1")->nullable();
            $table->string("texto1")->nullable();
            $table->string("subtitulo2")->nullable();
            $table->string("texto2")->nullable();
            $table->string("subtitulo3")->nullable();
            $table->string("texto3")->nullable();
            $table->string("title")->nullable();
            $table->string("subtitle1")->nullable();
            $table->string("text1")->nullable();
            $table->string("subtitle2")->nullable();
            $table->string("text2")->nullable();
            $table->string("subtitle3")->nullable();
            $table->string("text3")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ourservices');
    }
};
