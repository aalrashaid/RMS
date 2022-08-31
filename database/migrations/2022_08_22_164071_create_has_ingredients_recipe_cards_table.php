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

            $table->id()->comment('The primary Key');

            //Foreing Key id

            $table->foreignId('Recipe_Card_Id')->references('id')->on('recipe_cards')
            ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In cuisines');

            $table->string('Ingredients_Name')->nullable()->comment('The Name of Ingredients ');
            $table->float('Ingredients_Unit')->nullable()->comment('The Unit Number of Ingredients (0.800 g) ');
            $table->string('Ingredients_Unit_Name')->nullable()->comment('The Unit Name of Ingredients (gram else) ');
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
        Schema::dropIfExists('has_ingredients_recipe_cards');

        //the  Schema Table drop Foreing Key id
        Schema::table('Has_Ingredients_Recipe_Cards', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Has_Ingredients_Recipe_Cards_Recipe_Card_Id_foreign');
        });
    }
};
