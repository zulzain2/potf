<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateGeneratePipelineTableNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('generate_pipeline', function (Blueprint $table) {

            $table->dropColumn('environments');
            $table->dropColumn('pipelines');
            $table->renameColumn('km', 'total_km');

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

            $table->text('environments')->nullable();
            $table->text('pipelines')->nullable();
            $table->renameColumn('total_km', 'km');

        });
    }
}
