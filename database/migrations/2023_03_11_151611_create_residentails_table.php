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
        Schema::create('residentails', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('proprerty_id');
            $table->foreign('proprerty_id')->references('id')->on('properties')->onDelete('cascade');
            $table->string('residerntail_type');
            $table->double('price_x');
            $table->double('price_y');
            $table->integer('number_of_badroom');
            $table->integer('number_of_bathroom');
            $table->double('area_x');
            $table->double('area_y');
            $table->boolean('furnished'); //furnished is 0->furnished,furnished is 1 ->unfurnished
            $table->string('more_details')->nallable();
            $table->integer('keyword');
            $table->double('location_x');
            $table->double('location_y');
            $table->integer('state');//state is 0 ->rent,state is 1 ->bey
            $table->integer('offer')->nullable();
            $table->date('time_of_offer')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residentails');
    }
};