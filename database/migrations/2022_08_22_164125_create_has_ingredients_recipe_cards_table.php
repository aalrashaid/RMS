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
        Schema::create('Has_Ingredients_Recipe_Cards', function (Blueprint $table) {

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('Recipe_Card_Id')->references('id')->on('recipe_cards')->comment('');
            $table->string('Ingredients_Name')->nullable()->comment('');
            $table->float('Ingredients_Unit')->nullable()->comment('');
            $table->string('Ingredients_Unit_Name')->nullable()->comment('');
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
        Schema::dropIfExists('has_ingredients_recipe_cards');
    }
};
