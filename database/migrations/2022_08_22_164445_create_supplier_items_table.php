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

            $table->id();
            $table->foreignId('User_Id')->references('id')->on('users');
            $table->foreignId('Brands_Id')->references('id')->on('brands');
            $table->foreignId('Supplier_Id')->references('id')->on('suppliers');
            $table->string('Item_Name')->comment('The name of the unit');
            $table->string('Item_Description')->comment('The name of the unit');
            $table->string('Barcode')->comment('The name of the unit');
            $table->double('Price')->comment('The name of the unit');
            $table->integer('Quantity')->comment('The name of the unit');
            $table->double('Total')->comment('The name of the unit');
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
        Schema::dropIfExists('supplier_items');
    }
};
