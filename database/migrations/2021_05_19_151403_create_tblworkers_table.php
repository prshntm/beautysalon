<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblworkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblworkers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('WorkerName', 20);
            $table->string('WorkerSurname', 20);
            $table->integer('JobId')->unsigned();
            $table->foreign('JobId')->references('id')->on('tbljobs');
            $table->text('WorkerBio');
            $table->string('GalleryFolder');
            $table->string('WorkerPhoto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblworkers');
    }
}
