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
        Schema::create('Suppliers', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id()->comment('The primary Key');

            //Foreing Key id
            $table->foreignId('User_id')->nullable()->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->comment('The foreign Key Id in Taleb In User');

            $table->foreignId('Countries_id')->nullable()->references('id')->on('Countries')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In Countries');

            $table->foreignId('Thumbnail_Id')->references('id')->on('thumbnails')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('The foreign Key Id in Taleb In thumbnails');

            // $table->foreignId('Brands_Id')->references('id')->on('brands')
            // ->onUpdate('cascade')
            // ->onDelete('cascade')
            // ->comment('The foreign Key Id in Taleb In brands');

            //$table->text('Description');
            $table->string('Slug')->nullable()->unique()->comment('the Slug Links of Business Name Suppliers');
            $table->string('Supplier_UID')->nullable()->unique()->comment('the Brand Unique identifier');
            $table->string('Name_Supplier')->nullable()->unique()->comment('The name of Suppliers ');
            $table->string('Company_Name')->nullable()->comment('The name of Company');
            //$table->string('Brand_Logo')->nullable()->comment('The Suppliers Files images Brand Logo');
            $table->string('Address')->nullable()->comment('Address Business Localtion');
            $table->string('City')->nullable()->comment('City');
            $table->string('State')->nullable()->comment('Province of Country');
            $table->integer('Zip_Code')->nullable()->comment(' The Number Zip Code of City 5 Number');
            //$table->string('Region')->nullable()->comment('The Region of Country');
            //$table->string('Country')->nullable()->comment('The Country');
            $table->integer('Moblie')->nullable()->comment('The Account Moblie Business');
            $table->integer('Whatsapp')->nullable()->comment('The Accunt Email Business');
            $table->string('Email')->nullable()->comment('The Accunt Email Business');
            $table->string('Web')->nullable()->comment('The Accunt Web Business');
            $table->string('Facebook')->nullable()->comment('The Accunt Facebook Business');
            $table->string('Youtube')->nullable()->comment('The Accunt Youtube Business');
            $table->string('Instagram')->nullable()->comment('The Accunt Instagram Business');
            $table->string('Twitter')->nullable()->comment('The Accunt Twitter Business');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Suppliers');

        //the  Schema Table drop Foreing Key id
        Schema::table('Suppliers', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Suppliers_User_id_foreign');
            $table->dropForeign('Suppliers_Countries_id_foreign');
            $table->dropForeign('Suppliers_Thumbnail_Id_foreign');
        });
    }
};
