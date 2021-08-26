<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblfeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblfeedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->bigInteger('UserId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users');
            $table->integer('WorkerId')->unsigned();
            $table->foreign('WorkerId')->references('id')->on('tblworkers');
            $table->text('FeedbackText');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblfeedbacks');
    }
}
