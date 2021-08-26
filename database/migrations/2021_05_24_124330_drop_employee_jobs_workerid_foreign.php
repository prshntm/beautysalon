<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropEmployeeJobsWorkeridForeign extends Migration
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
        Schema::table('employee_jobs', function (Blueprint $table) {
            $table->dropForeign('employee_jobs_workerid_foreign');
            $table->dropColumn('WorkerId');
        });
    }
}
