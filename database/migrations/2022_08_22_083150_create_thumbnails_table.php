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
        Schema::create('Thumbnails', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id();

            $table->foreignId('Brands_id')->references('id')->on('brands')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('User_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('File_Name')->nullable()->comment('The name of File Images');
            $table->string('File_Size')->nullable()->comment('The name of File Size of Images');
            $table->string('File_Path')->nullable()->comment('The name of File Path of Images Storage');
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
        Schema::dropIfExists('thumbnails');
    }
};
