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
        Schema::create('Has_Recipe_Costs', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id();

            //Foreing Key id
            
            $table->foreignId('Recipe_Costs_Id')->references('id')->on('recipe_costs')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');

            //$table->string('AP_Quantity');
            $table->string('Ingredients')->nullable()->comment('');
            $table->integer('AP_Quantity')->nullable()->comment('');
            $table->float('AP_Recipe_Unit')->nullable()->comment('');
            $table->double('AP_Unit_Cost')->nullable()->comment('');
            $table->float('EP_Recipe_Unit')->nullable()->comment('');
            $table->double('EP_Unit_Cost')->nullable()->comment('');
            $table->float('EP_Yield')->nullable()->comment('');
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
        Schema::dropIfExists('Has_Recipe_Costs');

        //the  Schema Table drop Foreing Key id
        Schema::table('Has_Recipe_Costs', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Has_Recipe_Costs_Recipe_Costs_Id_foreign');
        });
    }
};
