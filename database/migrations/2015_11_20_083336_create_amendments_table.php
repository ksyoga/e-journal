<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmendmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amendments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supdt_id')->unsigned();
            $table->integer('surveyor_id')->unsigned();
            // $table->string('req_no');
            $table->string('plan_no');
            $table->date('received');
            // $table->date('issued');
            $table->string('supdt_note');
            $table->date('completion');
            $table->string('surveyor_note');
            $table->timestamps();
            $table->foreign('supdt_id')->references('id')->on('supdts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('surveyor_id')->references('id')->on('surveyors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('amendments');
    }
}
