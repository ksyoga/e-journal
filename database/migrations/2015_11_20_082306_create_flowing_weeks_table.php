<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlowingWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flowing_weeks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surveyor_id')->unsigned();
            $table->smallInteger('year');
            $table->smallInteger('month');
            /**
             * Surveyor
             */
            $table->date('day');
            $table->integer('requ_id')->unsigned()->nullable()->comment('Requisition No');
            $table->string('pro_work',250)->nullable()->comment('Programmed work');
            /**
             * Requirements of Resources
             */
            $table->smallInteger('no_sfa')->nullable()->comment('No of SFA needed for Survey');
            $table->enum('instrument',['No', 'Yes'])->comment('Total station required on this day');
            $table->enum('vehicle',['No', 'Yes'])->comment('if deptl. vehicle required on this day');
            $table->double('travel')->nullable()->comment('No of of Km estimated to travel on this day by deptl.vehicle');
            /**
             * Proposed duty to SFA
             */
            $table->integer('sfa_requ_id')->unsigned()->nullable()->comment('Requisition No');
            $table->string('sfa_work_asign')->nullable()->comment('Work to be assigned');
            /**
             * SS's note
             */
            $table->string('ss_note')->nullable()->comment('SS note');
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
        Schema::drop('flowing_weeks');
    }
}
