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
        Schema::create('taxioffices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('community_id');
            $table->foreign('community_id')->references('id')->on('communities')->onDelete('cascade');
            $table->string('name_of_office');
            $table->integer('phone')->nullable();
            $table->string('links')->nullable();
            $table->string('name_of_address');
            $table->double('location_x');
            $table->double('location_y');
            $table->text('more_details')->nullable();
            $table->boolean('offer')->nullable();
            $table->text('title_of_offer')->nullable();
            $table->date('time_of_offer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxioffices');
    }
};