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
            $table->integer('father_id');
            $table->integer('mother_id');
            $table->char('gender', 1);
            $table->date('dob');
            $table->date('dod');
            $table->string('description', 255);
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
