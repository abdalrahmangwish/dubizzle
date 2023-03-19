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
        Schema::create('commercials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('proprerty_id');
            $table->foreign('proprerty_id')->references('id')->on('properties')->onDelete('cascade');
            $table->double('price_x');
            $table->double('price_y');
            $table->double('area_x');
            $table->double('area_y');
            $table->boolean('furnished');
            $table->integer('state');
            $table->integer('phone')->nullable();
            $table->string('linke')->nullable();
            $table->string('type_of_commercial');
            $table->integer('keyword');
            $table->text('more_details')->nullable();
            $table->double('location_x');
            $table->double('location_y');
            $table->boolean('offer')->nullable(); // if proprety is offer ->1 else 0
            $table->date('time_of_offer')->nullable();
            $table->string('title_of_offer')->nullable();
            $table->timestamps();
        });
    }

/**
 * Reverse the migrations.
 */
    public function down(): void
    {
        Schema::dropIfExists('commercials');
    }
};
