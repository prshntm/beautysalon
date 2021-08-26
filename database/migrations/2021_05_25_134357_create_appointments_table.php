<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appoint_id');
            $table->bigInteger('user_Id')->unsigned();
            $table->foreign('user_Id')->references('id')->on('users');
            $table->integer('staff_Id')->unsigned();
            $table->foreign('staff_Id')->references('staff_id')->on('staff');
            $table->time('time_start');
            $table->time('time_end');
            $table->string('time_interval');
            $table->date('appoint_date');
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
        Schema::dropIfExists('appointments');
    }
}
