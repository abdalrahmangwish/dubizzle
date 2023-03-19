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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('machine_id');
            $table->foreign('machine_id')->references('id')->on('machines')->onDelete('cascade');
            $table->integer('state'); // rent or bay
            $table->double('location_x');
            $table->double('location_y');
            $table->string('type_of_car');
            $table->string('extra');
            $table->double('kelometers');
            $table->string('color');
            $table->double('year');
            $table->integer('offer')->nullable();
            $table->date('time_of_offer')->nullable();
            $table->text('title_of_offer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};