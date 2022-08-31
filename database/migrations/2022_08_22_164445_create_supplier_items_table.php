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
        Schema::create('Supplier_Items', function (Blueprint $table) {
            
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id()->comment('The primary Key');

            //Foreing Key id
            $table->foreignId('User_Id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');
            $table->foreignId('Brands_Id')->references('id')->on('brands')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');
            $table->foreignId('Supplier_Id')->references('id')->on('suppliers')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');

            $table->string('Item_UID')->comment('The name of the unit');
            $table->string('Item_Name')->comment('The name of the unit');
            $table->string('Item_Description')->comment('The name of the unit');
            $table->string('Category_Item');
            $table->string('Item_Size');
            $table->string('SKU')->comment('The name of the unit');
            $table->string('UPC')->comment('The name of the unit');
            $table->string('Barcode')->comment('The name of the unit');
            $table->string('Serial_Number')->comment('The name of the unit');

            // $table->double('Price')->comment('The name of the unit');
            //$table->integer('Quantity')->comment('The name of the unit');
            //$table->double('Total')->comment('The name of the unit');

            $table->string('Item_Unit_Price');
            
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
        Schema::dropIfExists('Supplier_Items');

        //the  Schema Table drop Foreing Key id
        Schema::table('Supplier_Items', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Supplier_Items_User_Id_foreign');
            $table->dropForeign('Supplier_Items_Brands_Id_foreign');
            $table->dropForeign('Supplier_Items_Supplier_Id_foreign');
        });
    }
};
