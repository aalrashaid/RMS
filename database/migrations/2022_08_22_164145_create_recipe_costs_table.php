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
        Schema::create('recipe_costs', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('brands_id')->references('id')->on('brands');
            $table->foreignId('menus_id')->references('id')->on('menus');
            $table->date('date_at');
            $table->string('recipeID');
            $table->string('recipeName');
            $table->string('category');
            $table->text('patch');
            $table->string('serves');
            $table->string('menuPrice');
            $table->string('foodCostPrcentage');
            $table->string('grossProfit');
            $table->string('margin');
            $table->string('cogs');
            $table->string('cogsPrcentage');
            $table->string('YieldPortion');
            //$table->string('idealGrossSellingPrice');
            //$table->string('grossSellingPrice');
            //$table->string('RecipeID');

            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_costs');
    }
};
