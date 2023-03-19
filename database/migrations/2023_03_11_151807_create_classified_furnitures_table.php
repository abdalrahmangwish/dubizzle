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
        Schema::create('classified_furnitures', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('post_types')->onDelete('cascade');
            $table->string('type_of_class');
            $table->double('price');
            $table->float('age');
            $table->integer('phone');
            $table->text('descraption')->nullable();
            $table->double('location_x');
            $table->double('location_y');
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
        Schema::dropIfExists('classified_furnitures');
    }
};