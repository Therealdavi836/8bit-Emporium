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
        Schema::create('platform_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('platforms_id');
            $table->foreign('platforms_id')->references('id')->on('platforms');
            $table->unsignedBigInteger('videogames_id');
            $table->foreign('videogames_id')->references('id')->on('videogames');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platform__details');
    }
};
