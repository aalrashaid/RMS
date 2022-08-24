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
            
            $table->id();

            //Foreing Key id
            $table->foreignId('User_Id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');
            $table->foreignId('Brands_Id')->references('id')->on('brands')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');
            $table->foreignId('Supplier_Items_ID')->references('id')->on('Supplier_Items')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');

            $table->string('Inventory_UID')->comment('The name of the unit');
            $table->string('Name_Item')->comment('The name of the unit');
            //$table->string('Description_Item')->comment('The name of the unit');
            $table->string('SKU')->comment('The name of the unit');
            $table->string('Barcode')->comment('The name of the unit');
            $table->string('Serial_Number')->comment('The name of the unit');
            $table->string('Category_Item')->comment('The name of the unit');
            $table->string('Item_Size')->comment('The name of the unit');
            $table->string('Unit_Price')->comment('The name of the unit');
            $table->string('Quantity_In_Stock')->comment('The name of the unit');
            $table->string('Inventory_Value')->comment('The name of the unit');
            $table->string('In_Stock')->comment('The name of the unit');
            $table->string('Reorder_Level')->comment('The name of the unit');
            $table->string('Reorder_Time_In_Days')->comment('The name of the unit');
            $table->string('Quantity_In_Reorder')->comment('The name of the unit');

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
