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
        Schema::create('Recipe_Cards', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';
            
            $table->id();

            //Foreing Key id
            $table->foreignId('User_Id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');
            $table->foreignId('Brands_Id')->references('id')->on('brands')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');
            $table->foreignId('Thumbnail_Id')->references('id')->on('thumbnails')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');

            $table->string('Title')->nullable()->comment('');
            $table->string('Slug')->nullable()->unique()->comment('');
            $table->string('Recipe_UID')->nullable()->unique()->comment('Recipe Unique identifier ');
            $table->text('Description')->nullable()->comment('');
            $table->string('Youtube_Video')->nullable()->comment('');
            $table->string('Recipe_Method')->nullable()->comment('method meaning in cooking There are three basic cooking methods, dry heat cooking method, medium of fat or oil, and medium of liquids or moist heat cooking method');
            $table->string('Difficulty')->nullable()->comment('The rating is from 1 to 5, one being the easiest and five being the most difficult.');
            $table->dateTime('Prep_Time')->nullable()->comment('');
            $table->dateTime('Cook_Time')->nullable()->comment('');
            $table->dateTime('Time_Total')->nullable()->comment('');
            $table->integer('Servings')->nullable()->comment('');
            //$table->string('yield')->nullable()->comment('');
            //$table->text('ingredients')->nullable()->comment('');
            $table->text('Directions')->nullable()->comment('');
            //$table->text('nutrition_facts')->nullable()->comment('');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_cards');

        //the  Schema Table drop Foreing Key id
        Schema::table('Recipe_Cards', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Recipe_Cards_User_Id_foreign');
            $table->dropForeign('Recipe_Cards_Brands_Id_foreign');
            $table->dropForeign('Recipe_Cards_Thumbnail_Id_foreign');
        });
    }
};
