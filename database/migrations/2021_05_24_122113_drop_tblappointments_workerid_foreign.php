<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTblappointmentsWorkeridForeign extends Migration
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
        Schema::table('tblappointments', function (Blueprint $table) {
            $table->dropForeign('tblappointments_workerid_foreign');
            $table->dropColumn('WorkerId');
            $table->dropForeign('tblappointments_serviceid_foreign');
            $table->dropColumn('ServiceId');
        });
    }
}
