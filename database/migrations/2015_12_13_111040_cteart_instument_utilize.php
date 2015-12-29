<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CteartInstumentUtilize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iutilize', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('requisition_id')->unsigned();
            $table->integer('instrument_id')->unsigned();
            $table->date('used_date');
            $table->double('used_days');
            $table->timestamps();

            $table->foreign('requisition_id')->references('id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('instrument_id')->references('id')->on('instruments')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('iutilize');
    }
}
