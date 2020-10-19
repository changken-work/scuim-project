<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repair_logs', function (Blueprint $table) {
            $table->primary(['factory_id', 'car_id', 'current_hash']);
            $table->foreignId('factory_id')->constrained('factories')->onDelete('cascade');
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->string('current_hash');
            $table->string('prev_hash');
            $table->unsignedBigInteger('mileages');
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
        Schema::dropIfExists('repair_logs');
    }
}
