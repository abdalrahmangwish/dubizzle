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
        Schema::create('mobile_laptops', function (Blueprint $table) {
            //Note-> in evrey table we need column timed post <--
            $table->increments('id');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('post_types')->onDelete('cascade');
            $table->string('type_of_mobile')->nullable();
            $table->string('type_of_table')->nullable();
            $table->date('production_date');
            $table->string('features');
            $table->integer('state')->nullable(); //1->used ,2->new
            $table->integer('phone')->nullable();
            $table->string('linke')->nullable();
            $table->string('more_details')->nullable();
            $table->boolean('offer')->nullable();
            $table->integer('time_of_offer')->nullable();
            $table->text('title_of_offer')->nullable();
            $table->string('photos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mobile_laptops');

    }
};
