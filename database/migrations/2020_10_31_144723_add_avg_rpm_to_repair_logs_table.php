<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAvgRpmToRepairLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('repair_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('avg_rpm')->after('mileages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('repair_logs', function (Blueprint $table) {
            $table->dropColumn('avg_rpm');
        });
    }
}
