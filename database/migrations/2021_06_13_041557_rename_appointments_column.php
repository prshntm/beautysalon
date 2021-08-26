<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameAppointmentsColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function(Blueprint $table)
        {
            $table->renameColumn('appoint_id', 'id');
            $table->renameColumn('user_Id', 'user_id');
            $table->renameColumn('staff_Id', 'staff_id');
            $table->renameColumn('service_Id', 'service_id');
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
