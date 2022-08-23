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
        Schema::create('Menus', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id();
            $table->foreignId('User_Id')->references('id')->on('users')->comment('');
            $table->foreignId('Brands_Id')->references('id')->on('brands')->comment('');
            $table->foreignId('Category_Id')->references('id')->on('categories')->comment('');
            $table->string('Recipe_ID')->nullable()->comment('');
            $table->string('Name')->nullable()->comment('');
            $table->string('Slug')->nullable()->unique()->comment('');
            $table->text('Description')->nullable()->comment('');
            $table->double('Price')->nullable()->comment('');
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
        Schema::dropIfExists('menus');
    }
};
