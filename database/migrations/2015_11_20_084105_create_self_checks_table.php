<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSelfChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_checks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surveyor_id')->unsigned();
            $table->integer('year');
            $table->integer('month');
            $table->binary('field_1');
            $table->binary('field_2');
            $table->binary('field_3');
            $table->binary('field_4');
            $table->binary('field_5');
            $table->binary('field_6');
            $table->binary('field_7');
            $table->binary('field_8');
            $table->binary('field_9');
            $table->binary('field_10');
            $table->binary('field_11');
            $table->binary('field_12');
            $table->timestamps();
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
        Schema::drop('self_checks');
    }
}
