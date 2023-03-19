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
        Schema::create('paids', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('residentail_id');
            $table->foreign('residentail_id')->references('id')->on('residentails')->onDelete('cascade');
            $table->unsignedBigInteger('commercial_id');
            $table->foreign('commercial_id')->references('id')->on('commercials')->onDelete('cascade');
            $table->unsignedBigInteger('land_id');
            $table->foreign('land_id')->references('id')->on('lands')->onDelete('cascade');
            $table->unsignedBigInteger('room_id');
            $table->foreign('room-id')->references('id')->on('rooms')->onDelete('cascade');
            $table->integer('yearly')->nullable(); // if 1 -> yearly , else  not yearly ->all recipes
            $table->integer('bi_yearly')->nullable(); //<----
            $table->integer('quarterly')->nullable(); //<----
            $table->integer('monthly')->nullable(); //<-----
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paids');
    }
};