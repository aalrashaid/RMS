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
            ->comment('The foreign Key Id in Taleb In recipe cards');

            $table->foreignId('Category_Id')->references('id')->on('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In recipe cards');

            $table->foreignId('Thumbnail_Id')->references('id')->on('thumbnails')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In recipe cards');

            $table->foreignId('Brands_Id')->references('id')->on('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In recipe cards');

            $table->foreignId('Recipe_Cards_Id')->references('id')->on('Recipe_Cards')
            ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In recipe cards');

            $table->foreignId('Recipe_Costs_Id')->references('id')->on('Recipe_Costs')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->comment('The foreign Key Id in Taleb In Recipe Costs');

            $table->string('Name')->nullable()->commentُ('the Name of Reicpe ');
            $table->string('Slug')->nullable()->unique()->comment('The SLugs for Menu to route links used ');
            $table->text('Description')->nullable()->comment('The Reicpe of Description ');
            $table->double('Price')->nullable()->comment('The Price  of Reicpe');
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
            $table->dropForeign('Menus_Category_Id_foreign');
            $table->dropForeign('Menus_Thumbnail_Id_foreign');
            $table->dropForeign('Menus_Brands_Id_foreign');
            $table->dropForeign('Menus_Recipe_Cards_Id_foreign');
            $table->dropForeign('Menus_Recipe_Costs_Id_foreign');
            //$table->dropForeign('Menus_Recipe_Cards_Id_foreign');
        });
    }
};
