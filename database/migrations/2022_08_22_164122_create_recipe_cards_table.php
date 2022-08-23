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
            $table->foreignId('user_id')->references('id')->on('users')->comment('');
            $table->foreignId('brands_id')->references('id')->on('brands')->comment('');
            $table->foreignId('thumbnail_id')->references('id')->on('thumbnails')->comment('');
            $table->string('title')->nullable()->comment('');
            $table->string('slug')->nullable()->unique()->comment('');
            $table->text('description')->nullable()->comment('');
            $table->string('youtube_video')->nullable()->comment('');
            $table->string('recipe_method')->nullable()->comment('');
            $table->string('difficulty')->nullable()->comment('');
            $table->string('prep_time')->nullable()->comment('');
            $table->string('cook_time')->nullable()->comment('');
            $table->string('time_total')->nullable()->comment('');
            $table->string('servings')->nullable()->comment('');
            $table->string('yield')->nullable()->comment('');
            //$table->text('ingredients')->nullable()->comment('');
            $table->text('directions')->nullable()->comment('');
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
