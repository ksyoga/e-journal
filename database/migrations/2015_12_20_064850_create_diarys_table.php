<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('surveyor_id')->unsigned();
            $table->smallInteger('year')->unsigned();
            $table->smallInteger('month')->unsigned();
            $table->date('day');
            /**
             * @Purpose of the day spent by Surveyor
             */
            $table->integer('field_1')->unsigned()->nullable()->comment('Requisition No');
            $table->string('field_2',20)->nullable()->comment('Category No');
            $table->double('field_3',2,1)->nullable()->comment('Investigating Reqn .in Office');
            $table->double('field_4',2,1)->nullable()->comment('Investigating & Locating Reqn .in Field');
            $table->double('field_5',2,1)->nullable()->comment('Re-opening Boundary/ Setting out');
            $table->double('field_6',2,1)->nullable()->comment('Surveying or Leveling');
            $table->double('field_7',2,1)->nullable()->comment('Plan Work');
            $table->double('field_8',2,1)->nullable()->comment('Inspection by Senior Officer');
            $table->double('field_9',2,1)->nullable()->comment('Other Duties');
            $table->double('field_10',2,1)->nullable()->comment('Weekend & Public Holidays');
            $table->double('field_11',2,1)->nullable()->comment('Leave');
            /**
             * Daily Progress of Surveyor
             */
            $table->smallInteger('field_12')->nullable()->comment('No. of line reset or setout');
            $table->smallInteger('field_13')->nullable()->comment('No. of points Setout by using Total station');
            $table->smallInteger('field_14')->nullable()->comment('No. of line Surveyed');
            $table->smallInteger('field_15')->nullable()->comment('No. of Shots taken by using Total station');
            $table->double('field_16')->nullable()->comment('No. of km reset or setout/ km. Surveyed');
            $table->double('field_17')->nullable()->comment('No. of km. Levelled/ Sketches prepared for GPS sys.');
            $table->smallInteger('field_18')->nullable()->comment('No. of new LMM Surveyed');
            $table->smallInteger('field_19')->nullable()->comment('No. of lots staked out');
            $table->smallInteger('field_20')->nullable()->comment('No. of Allotment handed over/ CAD plans prepared');
            $table->smallInteger('field_21')->nullable()->comment('No. of points/ lines Traverse adjustment');
            $table->smallInteger('field_22')->nullable()->comment('No. of lots Join, describe boundaries, Editing');
            $table->smallInteger('field_23')->nullable()->comment('No. of lots Re-Plotting & Screen digitzing');
            $table->smallInteger('field_24')->nullable()->comment('No. of lots Lotting parcels, Lot computaions');
            $table->smallInteger('field_25')->nullable()->comment('No. of lots - Preparation of Tenement List');
            $table->smallInteger('field_26')->nullable()->comment('No. of Tracing, amendment tracing prepared');
            $table->enum('field_27',['-','X'])->nullable()->comment('Completing FB entries, preparing Reqn. file.Put X');
            $table->enum('field_28',['-','X'])->nullable()->comment('Attending plan amendments given by SS.Put X');
            /**
             * Duties of Survey Field Assistance on the day
             */
            $table->smallInteger('field_29')->nullable()->comment('No. of SFA assigned fron the day');
            $table->integer('field_30')->unsigned()->nullable()->comment('Requisition No');
            $table->string('field_31',20)->nullable()->comment('Category No');
            $table->double('field_32',2,1)->nullable()->comment('Clearing');
            $table->double('field_33',2,1)->nullable()->comment('Picketing/ Landmarking/ GPS monumentation');
            $table->double('field_34',2,1)->nullable()->comment('Assisiting for Survying or Leveling');
            $table->double('field_35',2,1)->nullable()->comment('Construction of BMM');
            $table->double('field_36',2,1)->nullable()->comment('Construction of LMM, CPP & etc..');
            $table->double('field_37',2,1)->nullable()->comment('Assisiting for fieldlecting Information in field');
            $table->double('field_38',2,1)->nullable()->comment('Assisiting for Handing over allotments to GN etc');
            $table->double('field_39',2,1)->nullable()->comment('Assigned SFA reported to Div.SO');
            $table->double('field_40',2,1)->nullable()->comment('Other duties');
            /**
             * Job done by SFA
             */
            $table->double('field_41')->nullable()->comment('No. of km cleared');
            $table->smallInteger('field_42')->nullable()->comment('No. of lines picketed');
            $table->smallInteger('field_43')->nullable()->comment('No. of LMM buried/GPS monumentation');
            $table->smallInteger('field_44')->nullable()->comment('No. of LMM constructed/CPP constructed');
            $table->smallInteger('field_45')->nullable()->comment('No. of BMM constructed');
            /**
             * Other Information
             */
            $table->enum('field_46',['F','W'])->nullable()->comment('Weather;Fine=F;Wet or Windy=W');
            $table->double('field_47')->nullable()->comment('No. of km. travelled by Foot.');
            $table->double('field_48')->nullable()->comment('No. of km. travelled by Vehicle.');
            /**
             * Remarks
             */
            $table->string('field_49')->nullable()->comment('Surveyor');
            $table->string('field_50')->nullable()->comment('SFA');
            $table->string('field_51')->nullable()->comment('Supdt.Of Surveys');

            $table->timestamps();
            $table->foreign('surveyor_id')->references('id')->on('surveyors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('field_1')->references('id')->on('requisitions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('diarys');
    }
}
