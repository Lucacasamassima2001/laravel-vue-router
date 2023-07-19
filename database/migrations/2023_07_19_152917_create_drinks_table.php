<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);

            $table->string('tags', 250);
            $table->string('category', 50);
            $table->boolean('category', 50);
            $table->boolean('glass', 50);
            $table->text('instructions');
            $table->text('instructionsIT');
            $table->string('thumb', 200);
            $table->string('ingredient1', 50);
            $table->string('ingredient2', 50);
            $table->string('ingredient3', 50);
            $table->string('ingredient4', 50);
            $table->string('ingredient5', 50);
            $table->string('ingredient6', 50);
            $table->string('ingredient7', 50);
            $table->string('ingredient8', 50);
            $table->string('measure1', 50);
            $table->string('measure2', 50);
            $table->string('measure3', 50);
            $table->string('measure4', 50);
            $table->string('measure5', 50);
            $table->string('measure6', 50);
            $table->string('measure7', 50);
            $table->string('measure8', 50);
            $table->string('imageSource', 200);
            $table->string('imageAttribution', 50);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drinks');
    }
};
