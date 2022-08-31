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
        Schema::create('Recipe_Costs', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id()->comment('The primary Key');
            
            //Foreing Key id
            
            $table->foreignId('User_Id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');

            $table->foreignId('Brands_Id')->references('id')->on('brands')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');

            $table->foreignId('Category_Id')->references('id')->on('categories')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');

            $table->foreignId('Menus_Id')->references('id')->on('menus')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');
            
            $table->foreignId('Recipe_Card_Id')->references('id')->on('recipe_cards')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');

            $table->string('Recipe_UID')->nullable()->unique()->comment('Recipe Unique identifier ');
            $table->string('Recipe_Name')->nullable()->comment('');
            $table->date('Date_At')->nullable()->comment('');
            //$table->string('category')->nullable()->comment('');
            $table->integer('Patch')->nullable()->comment('');
            $table->integer('Serves')->nullable()->comment('');
            $table->double('Menu_Price')->nullable()->comment('');
            $table->float('Food_Cost_Prcentage')->nullable()->comment('');
            $table->double('Gross_Profit')->nullable()->comment('');
            $table->double('Margin')->nullable()->comment('');
            $table->double('COGS')->nullable()->comment('');
            $table->float('COGS_Prcentage')->nullable()->comment('');
            $table->float('Yield_Prcentage')->nullable()->comment('');
            $table->double('Ideal_Gross_Selling_Price');
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
        Schema::dropIfExists('Recipe_Costs');

        //the  Schema Table drop Foreing Key id
        Schema::table('Recipe_Costs', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Recipe_Costs_User_Id_foreign');
            $table->dropForeign('Recipe_Costs_Brands_Id_foreign');
            $table->dropForeign('Recipe_Costs_Category_Id_foreign');
            $table->dropForeign('Recipe_Costs_Menus_Id_foreign');
        });
    }
};
