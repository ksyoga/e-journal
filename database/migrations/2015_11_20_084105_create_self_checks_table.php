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
            $table->string('field_1');
            $table->string('field_2');
            $table->string('field_3');
            $table->string('field_4');
            $table->string('field_5');
            $table->string('field_6');
            $table->string('field_7');
            $table->string('field_8');
            $table->string('field_9');
            $table->string('field_10');
            $table->string('field_11');
            $table->string('field_12');
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
