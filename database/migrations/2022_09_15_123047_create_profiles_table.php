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
        Schema::create('Profiles', function (Blueprint $table) {
            /**
             * Need To view In stage 1 before beta fixed data type
             */
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->engine = 'InnoDB';

            $table->id()->comment('The primary Key');

            //Foreing Key id

            $table->foreignId('User_Id')->references('id')->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Country_ID')->references('id')->on('Countries')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Currency_ID')->references('id')->on('Currency')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Languages_ID')->references('id')->on('Languages')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->foreignId('Units_Of_Measure_ID')->references('id')->on('Units_Of_Measure')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->comment('');

            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0)->comment('The primary Key');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');

        //the drop forekey id
        Schema::table('Profiles', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('Profiles_User_id_foreign');
            $table->dropForeign('Profiles_Country_ID_foreign');
            $table->dropForeign('Profiles_Currency_ID_foreign');
            $table->dropForeign('Profiles_Languages_ID_foreign');
            $table->dropForeign('Profiles_Units_Of_Measure_ID_foreign');

        });
    }
};
