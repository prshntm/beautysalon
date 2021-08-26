<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblservicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblservices', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('ServiceName');
            $table->integer('ServCategoryId')->unsigned();
            $table->foreign('ServCategoryId')->references('id')->on('tblservicecategories');
            $table->integer('Duration');
            $table->double('ServicePrice', 7, 2);
            $table->string('ServiceSubcategory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblservices');
    }
}
