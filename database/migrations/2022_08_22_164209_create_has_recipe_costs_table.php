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
        Schema::create('has_recipe_costs', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('recipe_costs_id')->references('id')->on('recipe_costs');

            //$table->string('AP_Quantity');
            $table->string('Ingredients');
            $table->string('AP_Quantity');
            $table->string('AP_RecipeUnit');
            $table->string('AP_UnitCost');
            $table->string('EP_RecipeUnit');
            $table->string('EP_UnitCost');
            $table->string('EP_Yield');
            //$table->string('Total');

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
        Schema::dropIfExists('has_recipe_costs');
    }
};
