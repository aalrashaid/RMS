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
            $table->foreignId('user_id')->references('id')->on('users')->comment('');
            $table->foreignId('brands_id')->references('id')->on('brands')->comment('');
            $table->foreignId('category_id')->references('id')->on('categories')->comment('');
            $table->foreignId('menus_id')->references('id')->on('menus')->comment('');

            $table->string('recipeID')->nullable()->comment('');
            $table->string('recipeName')->nullable()->comment('');
            $table->date('date_at')->nullable()->comment('');
            $table->string('category')->nullable()->comment('');
            $table->text('patch')->nullable()->comment('');
            $table->string('serves')->nullable()->comment('');
            $table->string('menuPrice')->nullable()->comment('');
            $table->string('foodCostPrcentage')->nullable()->comment('');
            $table->string('grossProfit')->nullable()->comment('');
            $table->string('margin')->nullable()->comment('');
            $table->string('cogs')->nullable()->comment('');
            $table->string('cogsPrcentage')->nullable()->comment('');
            $table->string('YieldPortion')->nullable()->comment('');
            $table->string('idealGrossSellingPrice');
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
