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
        Schema::create('lands', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('proprerty_id');
            $table->foreign('proprerty_id')->references('id')->on('properties')->onDelete('cascade');
            $table->string('land_type');
            $table->integer('keyword');
            $table->double('price_x');
            $table->double('price_y');
            $table->double('area_x');
            $table->double('area_y');
            $table->integer('phone')->nullable();
            $table->string('links')->nullable();
            $table->double('location_x');
            $table->double('location_y');
            $table->string('more_details')->nullable();
            $table->integer('offer')->nullable();
            $table->string('title_of_offer')->nullable();
            $table->date('time_of_offer')->nullable();
            $table->integer('state'); // 0->rent, 1->bay,2->both
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lands');
    }
};
