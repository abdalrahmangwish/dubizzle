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
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('proprerty_id');
             $table->foreign('proprerty_id')->references('id')->on('properties')->onDelete('cascade');
             $table->boolean('state');// if state is 0 -> rent , if state is 1 -> bey
             $table->boolean('room_features');//if room_features is 0 -> features , if room_features is 1->unfeatures
             $table->double('price_x');
             $table->double('price_y');
             $table->string('video_of_property')->nullable();;
             $table->string('photo_3d')->nullable();;
             $table->text('more_details');
             $table->double('location_x');
             $table->double('location_y');
             $table->integer('offer')->nullable();;
             $table->date('time_of_offer')->nullable();;
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
