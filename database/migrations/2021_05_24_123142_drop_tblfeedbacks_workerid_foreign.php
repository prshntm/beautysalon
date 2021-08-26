<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTblfeedbacksWorkeridForeign extends Migration
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
        Schema::table('tblfeedbacks', function (Blueprint $table) {
            $table->dropForeign('tblfeedbacks_workerid_foreign');
            $table->dropColumn('WorkerId');
        });
    }
}
