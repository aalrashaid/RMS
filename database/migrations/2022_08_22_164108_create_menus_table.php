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

            $table->foreignId('Category_Id')->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Thumbnail_Id')->references('id')->on('thumbnails')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->comment('');

            $table->foreignId('Recipe_Cards_Id')->references('id')->on('Recipe_Cards')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->comment('');

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

        //the  Schema Table drop Foreing Key id
        Schema::table('Menus', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Menus_User_Id_foreign');
            $table->dropForeign('Menus_Brands_Id_foreign');
            // $table->dropForeign('Menus_Category_Id_foreign');
            $table->dropForeign('Menus_Recipe_Cards_Id_foreign');
        });
    }
};
