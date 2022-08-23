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
            $table->foreignId('recipe_costs_id')->references('id')->on('recipe_costs')->comment('');

            //$table->string('AP_Quantity');
            $table->string('Ingredients')->nullable()->comment('');
            $table->string('AP_Quantity')->nullable()->comment('');
            $table->string('AP_Recipe_Unit')->nullable()->comment('');
            $table->string('AP_Unit_Cost')->nullable()->comment('');
            $table->string('EP_Recipe_Unit')->nullable()->comment('');
            $table->string('EP_Unit_Cost')->nullable()->comment('');
            $table->string('EP_Yield')->nullable()->comment('');
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
