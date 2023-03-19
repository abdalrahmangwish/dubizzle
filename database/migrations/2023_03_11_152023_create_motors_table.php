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
        Schema::create('motors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('machine_id');
            $table->foreign('machine_id')->references('id')->on('machines')->onDelete('cascade');
            $table->integer('state'); // rent or bay
            $table->double('location_x');
            $table->double('location_y');
            $table->string('type_of_motor');
            $table->integer('Num_of_cylinders');
            $table->string('fuel_type')->nullable();
            $table->string('extres');
            $table->string('transmission_type');
            $table->double('year');
            $table->string('color');
            $table->double('kelometers');
            $table->integer('offer')->nullable();
            $table->date('time_of_offer')->nullable();
            $table->string('title_of_offer')->nullable();
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motors');
    }
};
