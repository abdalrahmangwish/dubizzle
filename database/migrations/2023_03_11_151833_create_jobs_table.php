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
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('post_types')->onDelete('cascade');
            $table->integer('state');// if state is  1 -> i wanted , if 0->i haring
            $table->integer('number_of_houres');
            $table->double('location_y');
            $table->double('location_x');
            $table->string('job_cv')->nullable();
            $table->string('link')->nullable();// apply by chrom
            $table->string('more_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};