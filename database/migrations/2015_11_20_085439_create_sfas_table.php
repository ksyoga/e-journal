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
            $table->string('name',50);
            $table->string('rank',20);
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
