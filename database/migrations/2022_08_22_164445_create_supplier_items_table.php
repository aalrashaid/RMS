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
        Schema::create('supplier_items', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('brands_id')->references('id')->on('brands');
            $table->foreignId('suppliers_id')->references('id')->on('suppliers');
            $table->string('ITEM_NAME');
            $table->string('ITEM_DESCRIPTION');
            $table->string('PRICE');
            $table->string('Quantity');
            $table->string('TOTAL');
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
