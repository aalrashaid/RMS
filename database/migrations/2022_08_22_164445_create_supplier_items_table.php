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
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->comment('');

            $table->foreignId('Thumbnail_Id')->references('id')->on('thumbnails')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Brands_Id')->references('id')->on('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Supplier_Id')->references('id')->on('suppliers')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->string('Item_UID')->nullable()->comment('The Item of Unique identifier');
            $table->string('Item_Name')->nullable()->comment('The name of the Item');
            $table->string('Item_Description')->comment('The Item OF Description');
            $table->string('Category_Item')->nullable()->comment('The Item OF Category');
            $table->string('Item_Size')->nullable()->comment('The Item OF Size  Bag, Box, Lb, Oz, etc.');
            $table->string('SKU')->nullable()->comment('Stock Keeping Unit (SKU)? SKU (pronounced “skew”), short for stock keeping unit, is used by retailers to identify and track its inventory, or stock. A SKU is a unique code consisting of letters and numbers that identify characteristics about each product, such as manufacturer, brand, style, color, and size');
            $table->string('UPC')->nullable()->comment('The Universal Product Code is a barcode symbology that is widely used worldwide for tracking trade items in stores. UPC consists of 12 digits that are uniquely assigned to each trade item.');
            $table->string('Barcode')->nullable()->comment('A barcode or bar code is a method of representing data in a visual, machine-readable form. Initially, barcodes represented data by varying the widths, spacings and sizes of parallel lines.');
            $table->string('Serial_Number')->nullable()->comment('A serial number is a unique identifier assigned incrementally or sequentially to an item, to uniquely identify it. Serial numbers need not be strictly numerical. They may contain letters and other typographical symbols, or may consist entirely of a character string');

            $table->double('Item_Unit_Price')->comment('The name of the unit');
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
