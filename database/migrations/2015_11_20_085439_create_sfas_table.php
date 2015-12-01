<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSfasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sfas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supdt_id')->unsigned();
            $table->string('code',10);
            $table->string('name',100);
            $table->string('rank',100);
            $table->integer('service');
            $table->string('image',50);
            $table->timestamps();
            $table->foreign('supdt_id')->references('id')->on('supdts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sfas');
    }
}
