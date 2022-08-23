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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id();
            //$table->text('Description');
            $table->string('suppliersID');
            $table->string('name_Suppliers');
            $table->string('company');
            $table->string('BrandImgs');
            $table->string('Street');
            $table->string('Postal_Code');
            $table->string('City');
            $table->string('Province');
            $table->string('Region');
            $table->string('Country');
            $table->string('Moblie');
            $table->string('Whatsapp');
            $table->string('Email');
            $table->string('Web');
            $table->string('Facebook');
            $table->string('Youtube');
            $table->string('instagram');
            $table->string('twitter');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('suppliers');
    }
};
