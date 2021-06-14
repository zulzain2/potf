<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrainSimulatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terrain_simulators', function (Blueprint $table) {
            $table->char('id' , 32);
            $table->primary('id');
            $table->text('name')->nullable();
            $table->text('desc')->nullable();
            $table->text('id_terrain')->nullable();
            $table->integer('id_status');
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
        Schema::dropIfExists('terrain_simulators');
    }
}
