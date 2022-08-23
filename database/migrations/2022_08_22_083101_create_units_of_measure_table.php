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
        Schema::create('units_of_measure', function (Blueprint $table) {

            // static data categories

            $table->id();
            $table->string('UNIT_NAME')->nullable()->comment('The name of the unit');
            $table->string('UNIT_TYPE')->nullable()->comment('The unit type (for example, LINEAR).');
            $table->string('CONVERSION_FACTOR')->nullable()->comment('A conversion factor used for internal calculations.');
            $table->string('DESCRIPTION')->nullable()->comment('A description of the unit.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('units_of_measure');
    }
};
