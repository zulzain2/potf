<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePipelineSimulatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pipeline_simulators', function (Blueprint $table) {
            $table->char('id' , 32);
            $table->primary('id');
            $table->text('name')->nullable();
            $table->text('desc')->nullable();
            $table->text('id_pipeline')->nullable();
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
        Schema::dropIfExists('pipeline_simulators');
    }
}
