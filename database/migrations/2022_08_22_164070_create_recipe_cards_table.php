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

            $table->id()->comment('The primary Key');

            //Foreing Key id 
            $table->foreignId('User_Id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In users');

            $table->foreignId('Brands_Id')->references('id')->on('brands')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In brands');

            $table->foreignId('Cuisine_id')->nullable()->references('id')->on('cuisines')
                ->onUpdate('cascade')
                ->onDelete('cascade')
            ->comment('The foreign Key Id in Taleb In cuisines');

            $table->foreignId('Thumbnail_Id')->references('id')->on('thumbnails')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In thumbnails');

            $table->string('Slug')->nullable()->unique()->comment(' The Slugs to used for Links and routes');
            $table->string('Recipe_UID')->nullable()->unique()->comment('Recipe Unique identifier ');
            $table->string('Title')->nullable()->comment('The title Of Recipe Cards and be Name  ');    
            $table->text('Description')->nullable()->comment('The Description of Recipe and be short word max 280 ');
            $table->string('Youtube_Video')->nullable()->comment('the Youtube links  post show ');
            $table->string('Recipe_Method')->nullable()->comment('method meaning in cooking There are three basic cooking methods, dry heat cooking method, medium of fat or oil, and medium of liquids or moist heat cooking method');
            $table->string('Difficulty')->nullable()->comment('The rating is from 1 to 5, one being the easiest and five being the most difficult.');
            $table->dateTime('Prep_Time')->nullable()->comment('The Time for prep 00:25 only minit ');
            $table->dateTime('Cook_Time')->nullable()->comment('The Time for Cooking  00:25 only minit');
            $table->dateTime('Time_Total')->nullable()->comment('The Total of Time prep + Cooking ');
            $table->integer('Servings')->nullable()->comment('the number of peoples of serving 1 to 10  ');
            //$table->string('yield')->nullable()->comment('');
            //$table->text('ingredients')->nullable()->comment('');
            $table->text('Directions')->nullable()->comment('direction is knowledge of where you are going and how to get where you want to end up');
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
