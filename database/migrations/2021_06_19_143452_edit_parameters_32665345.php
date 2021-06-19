<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditParameters32665345 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('terrain_parameters', function (Blueprint $table) {

            $table->text('desc')->after('name')->nullable();

        });

        Schema::table('pipeline_parameters', function (Blueprint $table) {

            $table->text('desc')->after('name')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('terrain_parameters', function (Blueprint $table) {

            $table->dropColumn('desc');

        });

        Schema::table('pipeline_parameters', function (Blueprint $table) {

            $table->dropColumn('desc');

        });
    }
}
