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

            $table->id()->comment('The primary Key');

            //Foreing Key id

            $table->foreignId('Recipe_Costs_Id')->references('id')->on('recipe_costs')
            ->onUpdate('cascade')
            ->onDelete('cascade')
                ->comment('');

            //$table->string('Extension');
            $table->string('Ingredients')->nullable()->comment('any of the foods or substances that are combined to make a particular dish.');
            $table->integer('AP_Quantity')->nullable()->comment('As purchased (AP) is the portion of food that is in the raw state before any cutting, processing, or cooking has occurred.');
            $table->float('AP_Recipe_Unit')->nullable()->comment('The Number of Ingredients  wieht 700 g');
            $table->string('AP_Recipe_Unit_Name')->nullable()->comment('The Unit of Ingredients  gram or else ');
            $table->double('AP_Unit_Cost')->nullable()->comment('The  Costing of Ingredients');
            $table->float('EP_Recipe_Unit')->nullable()->comment('Some ingredients are used As Purchased (AP) – Flour, sugar, butter, ground beef. • For others, we use only the Edible Portion (EP)');
            $table->string('EP_Recipe_Unit_Name')->nullable()->comment('The Number of Ingredients  wieht 700 g  As Purchased  ');
            $table->double('EP_Unit_Cost')->nullable()->comment('The Unit of Ingredients  gram or else ');
            $table->float('EP_Yield_Percentage')->nullable()->comment('Get your yield percentage by converting the edible product weight into a percentage. The formula is EP weight ÷ AP weight × 100 = yield %');
            $table->string('Extension')->nullable()->comment('Calculating recipes costs can be an eye opening experience.');
            $table->string('Total_Extension')->nullable()->comment('Calculating recipes costs Total experience. ');

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
