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
        Schema::create('tutors', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedBigInteger('community_id');
            $table->foreign('community_id')->references('id')->on('communities')->onDelete('cascade');
            $table->string('name_of_tutor');
            $table->integer('phone')->nullable();
            $table->string('links')->nullable();
            $table->string('adress_of_tutors');
            $table->double('location_x');
            $table->double('location_y');
            $table->text('more_details')->nullable();
            $table->integer('offer')->nullable();
            $table->date('time_of_offer')->nullable();
            $table->text('title_offer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutors');
    }
};
