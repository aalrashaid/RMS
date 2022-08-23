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
        Schema::create('Units_Of_Measure', function (Blueprint $table) {

            // static data categories

            $table->id();
            $table->string('Unit_Name')->nullable()->comment('The name of the unit');
            $table->string('Unit_Type')->nullable()->comment('The unit type (for example, LINEAR).');
            $table->string('Conversion_Factor')->nullable()->comment('A conversion factor used for internal calculations.');
            $table->set('Region', ['U.S.', 'British'])->nullable()->comment('The Region of Country');
            $table->string('Description')->nullable()->comment('A description of the unit.');
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
