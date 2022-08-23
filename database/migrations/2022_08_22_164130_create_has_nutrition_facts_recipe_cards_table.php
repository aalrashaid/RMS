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
        Schema::create('has_nutrition_facts_recipe_cards', function (Blueprint $table) {

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('recipe_cards_id')->references('id')->on('recipe_cards')->comment('');
            $table->string('Calories_Serving')->nullable()->comment('');
            $table->string('Carbs_Serving')->nullable()->comment('');
            $table->string('Protein_Serving')->nullable()->comment('');
            $table->string('Fat_Serving')->nullable()->comment('');
            $table->string('ingredients_name')->nullable()->comment('');
            $table->string('Calories_Unit')->nullable()->comment('');
            $table->string('Calories_Unit_Name')->nullable()->comment('');
            $table->string('Carbs')->nullable()->comment('');
            $table->string('Carbs_Unit_Name')->nullable()->comment('');
            $table->string('Protein_Unit')->nullable()->comment('');
            $table->string('Protein_Unit_Name')->nullable()->comment('');
            $table->string('Fat_Unit')->nullable()->comment('');
            $table->string('Fat_Unit_Name')->nullable()->comment('');
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
        Schema::dropIfExists('has_nutrition_facts_recipe_cards');
    }
};
