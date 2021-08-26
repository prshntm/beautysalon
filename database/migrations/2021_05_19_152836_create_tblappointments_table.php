<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblappointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblappointments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('UserId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users');
            $table->integer('WorkerId')->unsigned();
            $table->foreign('WorkerId')->references('id')->on('tblworkers');
            $table->integer('ServiceId')->unsigned();
            $table->foreign('ServiceId')->references('id')->on('tblservices');
            $table->time('TimeStart');
            $table->time('TimeEnd');
            $table->date('DateApp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblappointments');
    }
}
