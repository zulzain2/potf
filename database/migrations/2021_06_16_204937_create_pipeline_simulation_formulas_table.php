<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePipelineSimulationFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pipeline_simulation_formulas', function (Blueprint $table) {
            $table->char('id' , 32);
            $table->primary('id');
            $table->text('id_pipeline_simulation')->nullable();
            $table->text('id_pipeline_parameter')->nullable();
            $table->integer('order')->nullable();
            $table->integer('id_status')->nullable();
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
        Schema::dropIfExists('pipeline_simulation_formulas');
    }
}
