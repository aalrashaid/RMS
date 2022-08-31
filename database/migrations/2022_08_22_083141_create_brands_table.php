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
        Schema::create('Brands', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id()->comment('The primary Key');

            //the foring key id
            $table->foreignId('User_id')->nullable()->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In User');

            $table->foreignId('Cuisine_id')->nullable()->references('id')->on('cuisines')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In cuisines');

            $table->string('Slug')->nullable()->unique()->comment('the Slug Links of Business Name Brands');
            $table->string('Name_Brand')->nullable()->unique()->comment('the Business Name Brands');
            $table->text('Description')->nullable()->comment('Description Text 288 Characters ');
            $table->string('Brand_Loga')->nullable()->comment('the Files images brands Loags ');
            $table->string('Address')->nullable()->comment('Address Business Localtion');
            $table->string('City')->nullable()->comment('City');
            $table->string('State')->nullable()->comment('Province of Country');
            $table->integer('Zip_Code')->nullable()->comment(' The Number Zip Code of City 5 Number');
            //$table->string('Region')->nullable()->comment('The Region of Country');
            $table->string('Country')->nullable()->comment('The Country');
            $table->integer('Moblie')->nullable()->comment('The Account Moblie Business');
            $table->integer('Whatsapp')->nullable()->comment('The Accunt Email Business');
            $table->string('Email')->nullable()->comment('The Accunt Email Business');
            $table->string('Web')->nullable()->comment('The Accunt Web Business');
            $table->string('Facebook')->nullable()->comment('The Accunt Facebook Business');
            $table->string('Youtube')->nullable()->comment('The Accunt Youtube Business');
            $table->string('Instagram')->nullable()->comment('The Accunt Instagram Business');
            $table->string('Twitter')->nullable()->comment('The Accunt Twitter Business');

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
        Schema::dropIfExists('Brands');

        //the drop forekey id
        Schema::table('Brands', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Brands_User_id_foreign');
            //$table->dropForeign('Brands_cuisines_id_foreign');
            //$table->dropForeign('Brands_category_id_foreign');
            //$table->dropForeign('Brands_thumbnail_id_foreign');
        });
    }
};
