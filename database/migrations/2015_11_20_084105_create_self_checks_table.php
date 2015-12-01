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
            $table->boolean('field_1');
            $table->boolean('field_2');
            $table->boolean('field_3');
            $table->boolean('field_4');
            $table->boolean('field_5');
            $table->boolean('field_6');
            $table->boolean('field_7');
            $table->boolean('field_8');
            $table->boolean('field_9');
            $table->boolean('field_10');
            $table->boolean('field_11');
            $table->boolean('field_12');
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
