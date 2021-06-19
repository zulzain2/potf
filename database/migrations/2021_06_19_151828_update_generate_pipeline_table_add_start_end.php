<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGeneratePipelineTableAddStartEnd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generate_pipeline', function (Blueprint $table) {

            $table->text('start_km')->nullable();
            $table->text('end_km')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('generate_pipeline', function (Blueprint $table) {

            $table->dropColumn('start_km');
            $table->dropColumn('end_km');

        });
    }
}
