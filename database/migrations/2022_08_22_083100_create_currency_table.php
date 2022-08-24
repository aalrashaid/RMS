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
        Schema::create('Currency', function (Blueprint $table) {

            // static data categories

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            
            $table->id();

            //Foreing Key id
            $table->string('Country')->nullable()->comment('The name of Country');
            $table->string('Currency')->nullable()->comment('The name of Currency');
            $table->string('Code')->nullable()->comment('The name of Currency Code unit');
            $table->decimal('Minor_Unit')->nullable()->comment('The name of Currency Minor unit');
            $table->string('Symbol')->nullable()->comment('The name of Currency Symbol');
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
        Schema::dropIfExists('currency');
    }
};
