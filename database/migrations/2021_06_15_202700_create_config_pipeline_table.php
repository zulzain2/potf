<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigPipelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_pipeline', function (Blueprint $table) {
            $table->char('id' , 32);
            $table->primary('id');
            $table->char('id_generate_pipeline' , 32);
            $table->char('id_pipeline' , 32);
            $table->char('id_pipeline_parameter' , 32);
            $table->text('km')->nullable();
            $table->text('value')->nullable();
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
        Schema::dropIfExists('config_pipeline');
    }
}
