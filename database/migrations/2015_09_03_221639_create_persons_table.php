<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('persons', function($table) {
            $table->increments('id');
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->integer('father_id')->unsigned()->nullable();
            $table->foreign('father_id')->references('id')->on('persons');
            $table->integer('mother_id')->unsigned()->nullable();
            $table->foreign('mother_id')->references('id')->on('persons');
            $table->integer('profile_picture_id')->nullable();
            $table->char('gender', 1);
            $table->date('dob');
            $table->date('dod')->nullable();
            $table->string('marriage_id', 10)->nullable();
            $table->text('description')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('persons');
    }
}
