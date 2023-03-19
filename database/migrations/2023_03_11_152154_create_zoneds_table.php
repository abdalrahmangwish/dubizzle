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
        Schema::create('zoneds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('land_id');
            $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zoneds');
    }
};
