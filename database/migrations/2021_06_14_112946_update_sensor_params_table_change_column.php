<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSensorParamsTableChangeColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sensor_params', function (Blueprint $table) {

            $table->renameColumn('params', 'name');
            $table->renameColumn('value', 'type');
            $table->integer('required')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sensor_params', function (Blueprint $table) {
            
            $table->renameColumn('name', 'params');
            $table->renameColumn('type', 'value');
            $table->dropColumn('required');

        });
    }
}
