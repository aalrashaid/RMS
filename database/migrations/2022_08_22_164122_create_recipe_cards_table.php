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
        Schema::create('recipe_cards', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('brands_id')->references('id')->on('brands');
            $table->foreignId('thumbnail_id')->references('id')->on('thumbnails');
            $table->string('title')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('youtube_video')->nullable();
            $table->string('recipe_method')->nullable();
            $table->string('difficulty')->nullable();
            $table->string('prep_time')->nullable();
            $table->string('cook_time')->nullable();
            $table->string('total')->nullable();
            $table->string('servings')->nullable();
            $table->string('yield')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('directions')->nullable();
            $table->text('nutrition_facts')->nullable();
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
