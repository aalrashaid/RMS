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
        Schema::create('Inventories', function (Blueprint $table) {

            /**
             * Need To view In stage 1 before beta fixed data type
             */
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id()->comment('The primary Key');

            //Foreing Key id
            $table->foreignId('User_Id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Brands_Id')->references('id')->on('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Supplier_Items_ID')->references('id')->on('Supplier_Items')
            ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->string('Inventory_UID')->nullable()->unique()->comment('Inventory of Unique identifier');
            $table->string('Name_Item')->nullable()->comment('The Name Item');
            //$table->string('Description_Item')->comment('The name of the unit');
            $table->string('SKU')->nullable()->unique()->comment(' SKU for Inventory - Stock Keeping Unit (SKU)? SKU (pronounced “skew”), short for stock keeping unit, is used by retailers to identify and track its inventory, or stock. A SKU is a unique code consisting of letters and numbers that identify characteristics about each product, such as manufacturer, brand, style, color, and size');
            $table->string('Barcode')->nullable()->unique()->comment(' for Barcode Inventory');
            $table->string('Serial_Number')->nullable()->unique()->comment('for Barcode Inventoryt');
            $table->string('Category_Item')->nullable()->comment('for  Category Item Inventoryt');
            $table->string('Item_Size')->nullable()->comment('for Inventory The Item OF Size  Bag, Box, Lb, Oz, etc. ');
            $table->double('Item_Unit_Price')->nullable()->comment('for Inventory Unit Price');
            $table->string('Quantity_In_Stock')->nullable()->comment('for Inventory Quantity In Stock');
            $table->string('FIFO')->nullable()->comment(' first-in, first-out');
            $table->string('LIFO')->nullable()->comment('last-in, first-out');
            $table->string('Inventory_Value')->nullable()->comment(' For Inventory Value');
            $table->enum('Stock_Status', ['In Stock', 'Only %s left in stock', 'Can be Backordered', 'Available On Backorder', 'Out Of Stock'])->nullable()->comment('Stock Status');
            $table->string('Reorder_Level')->nullable()->comment(' For Inventory Reorder Level');
            $table->string('Reorder_Time_In_Days')->nullable()->comment('For Inventory ');
            $table->string('Quantity_In_Reorder')->nullable()->comment('For Inventory ');

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
        Schema::dropIfExists('Inventories');

        //the  Schema Table drop Foreing Key id
        Schema::table('Inventories', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Inventories_User_Id_foreign');
            $table->dropForeign('Inventories_Brands_Id_foreign');
            $table->dropForeign('Inventories_Supplier_Items_ID_foreign');
        });
    }
};
