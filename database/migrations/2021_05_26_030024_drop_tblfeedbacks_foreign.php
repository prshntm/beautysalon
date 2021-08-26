<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTblfeedbacksForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tblfeedbacks', function(Blueprint $table)
        {
            $table->dropForeign('tblfeedbacks_userid_foreign');
            $table->dropColumn('UserId');
        });
    }
}
