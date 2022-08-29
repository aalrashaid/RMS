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

            $table->id();

            //Foreing Key id
            $table->foreignId('User_id')->nullable()->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade')
            ->comment('The foreign Key Id in Taleb In User');
            $table->foreignId('Brands_Id')->references('id')->on('brands')
            ->onUpdate('cascade')->onDelete('cascade')->comment('');
            
            //$table->text('Description');
            $table->string('Supplier_UID')->comment('The name of the unit');
            $table->string('Name_Supplier')->comment('The name of the unit');
            $table->string('Company_Name')->comment('The name of the unit');
            $table->string('Brand_Logo')->comment('The name of the unit');
            $table->string('Street')->comment('The name of the unit');
            $table->string('Zip_Code')->comment('The name of the unit');
            $table->string('City')->comment('The name of the unit');
            $table->string('Province')->comment('The name of the unit');
            $table->string('Region')->comment('The name of the unit');
            $table->string('Country')->comment('The name of the unit');
            $table->string('Moblie')->comment('The name of the unit');
            $table->string('Whatsapp')->comment('The name of the unit');
            $table->string('Email')->comment('The name of the unit');
            $table->string('Web')->comment('The name of the unit');
            $table->string('Facebook')->comment('The name of the unit');
            $table->string('Youtube')->comment('The name of the unit');
            $table->string('Instagram')->comment('The name of the unit');
            $table->string('Twitter')->comment('The name of the unit');
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
            $table->dropForeign('Suppliers_Brands_Id_foreign');
        });
    }
};
