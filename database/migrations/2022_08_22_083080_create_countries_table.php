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
        Schema::create('Countries', function (Blueprint $table) {

            // static data categories

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';;

            //$table->unsignedInteger('id', true);
            $table->id();

            //$table->string('Iso')->nullable()->comment('The name of the unit');
            $table->string('Name')->nullable()->comment('The name Countries');
            $table->string('Alpha-2_Code')->nullable()->comment('all country ISO codes as described in the ISO 3166 international standard');
            $table->string('Alpha-3_Code')->nullable()->comment('all country ISO codes as described in the ISO 3166 international standard');
            $table->string('Numeric')->nullable()->comment('all country ISO codes as described in the ISO 3166 international standard');
            $table->string('Phone_Code')->nullable()->comment('The Countries  Call Code');
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
        Schema::dropIfExists('countries');
    }
};
