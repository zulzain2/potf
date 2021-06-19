<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateConfigTableAddOrderColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('config_terrain', function (Blueprint $table) {
            $table->text('order_by')->nullable();
        });
        Schema::table('config_pipeline', function (Blueprint $table) {
            $table->text('order_by')->nullable();
        });
        Schema::table('config_sensor', function (Blueprint $table) {
            $table->text('order_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('config_terrain', function (Blueprint $table) {
            $table->dropColumn('order_by');
        });
        Schema::table('config_pipeline', function (Blueprint $table) {
            $table->dropColumn('order_by');
        });
        Schema::table('config_sensor', function (Blueprint $table) {
            $table->dropColumn('order_by');
        });
    }
}
