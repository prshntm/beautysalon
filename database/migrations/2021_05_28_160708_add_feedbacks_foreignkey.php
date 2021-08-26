<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeedbacksForeignkey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('feedbacks', function(Blueprint $table) {
            $table->integer('staff_Id')->unsigned();
            $table->foreign('staff_Id')->references('staff_id')->on('staff')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('user_Id')->unsigned();
            $table->foreign('user_Id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
