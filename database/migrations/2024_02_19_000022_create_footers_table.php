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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("img_fondo")->nullable();
            $table->string("titulo")->nullable();
            $table->string("title")->nullable();
            $table->string("nombre")->nullable();
            $table->string("name")->nullable();
            $table->string("email")->nullable();
            $table->string("tel")->nullable();
            $table->string("url")->nullable();
            $table->string("direccion")->nullable();
            $table->string("redes")->nullable();
            $table->string("network")->nullable();
            $table->string("x")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedin")->nullable();
            $table->string("facebook")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
