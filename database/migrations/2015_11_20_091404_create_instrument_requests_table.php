<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrument_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('instrument_id')->unsigned();
            $table->integer('surveyor_id')->unsigned();
            $table->date('required_date');
            $table->string('request_for');
            $table->integer('approved_by');
            $table->string('supdt_note');
            $table->timestamps();
            $table->foreign('instrument_id')->references('id')->on('instruments')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::drop('instrument_requests');
    }
}
