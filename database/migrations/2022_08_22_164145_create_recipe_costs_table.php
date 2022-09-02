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
            ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In users');

            $table->foreignId('Brands_Id')->references('id')->on('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In brands');

            $table->foreignId('Category_Id')->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In categories');

            $table->foreignId('Menus_Id')->references('id')->on('menus')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In menus');

            $table->foreignId('Recipe_Card_Id')->references('id')->on('recipe_cards')
            ->onUpdate('cascade')->onDelete('cascade')->comment('The foreign Key Id in Taleb In recipe cards');

            $table->string('Recipe_UID')->nullable()->unique()->comment('Recipe Unique identifier ');
            $table->string('Recipe_Name')->nullable()->comment('The Recipe Name ');
            $table->date('Date_At')->nullable()->comment('The Date Create Reicpe ');
            //$table->string('category')->nullable()->comment('');
            $table->integer('Patch')->nullable()->comment('The Number of Patch 1,2,3 ');
            $table->integer('Serves')->nullable()->comment('the Accounting of Serve ');
            $table->double('Menu_Recipe')->nullable()->comment('The Recipe of Recipe');
            $table->float('Food_Cost_Prcentage')->nullable()->comment('On average , the food cost percentage is 28-32% in many full-service and quick-service restaurants. Of course, there is no exact “good” percentage — it varies depending on the type of food served and costs of operating the restaurant.');
            $table->double('Gross_Profit')->nullable()->comment('gross profit is the difference in value between the selling price of a dish and the cost of the ingredients and materials used to make a dish (otherwise known as the cost of goods sold, or COGS) (gross profit formula is: Gross Profit = Revenue – Cost of Goods Sold)');
            $table->double('Margin')->nullable()->comment('Restaurant profit margin, also known as net profit margin, is how much money your restaurant makes after it pays for its total expenses. Net profit margin measures your business \' profitability ratio: how much revenue you earn compared to how much it costs you to earn that revenue. ( formula is: (Selling price - cost of goods) / selling price = gross profit.)');
            $table->double('COGS')->nullable()->comment('Restaurant cost of goods sold (COGS) is a critical metric that spans operational and financial performance. Operators track COGS to determine the general profitability of the business as well as granular profitability for different services and menus, specific menu items, and days of the week. (formula is: Beginning Inventory + Purchased Inventory – Ending Inventory = Cost of Goods Sold (COGS) )');
            $table->float('COGS_Prcentage')->nullable()->comment('The Food Service Warehouse recommends your restaurant cost of goods sold (COGS) shouldn\'t be more than 31% of your sales . While fine dining restaurant COGS may be a bit higher due to more expensive food costs, pizza shops should aim for the low to mid 20% range for COGS, having lower operating costs.');
            $table->float('Yield_Prcentage')->nullable()->comment('Yield percentage in food refers to the amount of usable food produced after trimming or cooking losses. ... This means the recipe ingredient is in EP form. (formula is: EP weight ÷ AP weight × 100 = yield % ) ');
            $table->double('Ideal_Gross_Selling_Recipe')->nullable()->comment('');
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
