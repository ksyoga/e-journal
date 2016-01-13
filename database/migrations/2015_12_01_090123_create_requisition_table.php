<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supdt_id')->unsigned();
            $table->string('requisition_no',50)->unique();
            $table->date('received_date');
            $table->string('category',5);
            $table->double('work_load');
            $table->integer('lots');
            $table->double('extent');
            $table->integer('surveyor_id')->unsigned();
            $table->date('issued')->nullable();
            $table->date('commanced')->nullable();
            $table->double('fieldwork');
            $table->double('planwork');
            $table->integer('status');
            $table->date('complet_date')->nullable();
            $table->string('note');
            $table->timestamps();
            $table->foreign('supdt_id')->references('id')->on('supdts')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('surveyor_id')->references('id')->on('surveyors')->onDelete('cascade')->onUpdate('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requisitions');
    }
}
