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
        Schema::create('Has_Nutrition_Facts_Recipe_Cards', function (Blueprint $table) {

            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id()->comment('The primary Key');
            
            //Foreing Key id
            $table->foreignId('Recipe_Cards_Id')->references('id')->on('recipe_cards')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->comment('The Foring Key ID in tables Recipe Cards');

            $table->string('Calories_Serving')->nullable()->comment('total of calulator Calories Serving');
            $table->string('Carbs_Serving')->nullable()->comment('total of calulator Carbs Serving');
            $table->string('Protein_Serving')->nullable()->comment('total of calulator Protein Serving');
            $table->string('Fat_Serving')->nullable()->comment('total of calulator Fat Serving');
            $table->string('Ingredients_Name')->nullable()->comment('The Name of Ingredients');
            $table->float('Calories_Unit')->nullable()->comment('The Unit Number of Ingredients (0.800 g)');
            $table->string('Calories_Unit_Name')->nullable()->comment('The Unit Name of Ingredients (gram else)');
            $table->float('Carbs_Unit')->nullable()->comment('The Unit Number of Ingredients (0.800 g)');
            $table->string('Carbs_Unit_Name')->nullable()->comment('The Unit Name of Ingredients (gram else)');
            $table->float('Protein_Unit')->nullable()->comment('The Unit Number of Ingredients (0.800 g)');
            $table->string('Protein_Unit_Name')->nullable()->comment('The Unit Name of Ingredients (gram else)');
            $table->float('Fat_Unit')->nullable()->comment('The Unit Number of Ingredients (0.800 g)');
            $table->string('Fat_Unit_Name')->nullable()->comment('The Unit Name of Ingredients (gram else)');
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
        Schema::dropIfExists('has_nutrition_facts_recipe_cards');

        //the  Schema Table drop Foreing Key id
        Schema::table('Has_Nutrition_Facts_Recipe_Cards', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Has_Nutrition_Facts_Recipe_Cards_Id_foreign');
        });
    }
};
