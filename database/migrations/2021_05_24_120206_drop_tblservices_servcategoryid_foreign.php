<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropTblservicesServcategoryidForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('tblservices', function (Blueprint $table) {
            $table->dropForeign('tblservices_servcategoryid_foreign');
            $table->dropColumn('ServCategoryId');
        });
    }
}
