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
        Schema::create('Recipe_Cards', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('User_id')->references('id')->on('users')->comment('');
            $table->foreignId('Brands_id')->references('id')->on('brands')->comment('');
            $table->foreignId('Thumbnail_id')->references('id')->on('thumbnails')->comment('');
            $table->string('Title')->nullable()->comment('');
            $table->string('Slug')->nullable()->unique()->comment('');
            $table->text('Description')->nullable()->comment('');
            $table->string('Youtube_Video')->nullable()->comment('');
            $table->string('Recipe_Method')->nullable()->comment('');
            $table->string('Difficulty')->nullable()->comment('');
            $table->dateTime('Prep_Time')->nullable()->comment('');
            $table->dateTime('Cook_Time')->nullable()->comment('');
            $table->dateTime('Time_Total')->nullable()->comment('');
            $table->integer('Servings')->nullable()->comment('');
            //$table->string('yield')->nullable()->comment('');
            //$table->text('ingredients')->nullable()->comment('');
            $table->text('Directions')->nullable()->comment('');
            //$table->text('nutrition_facts')->nullable()->comment('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_cards');
    }
};
