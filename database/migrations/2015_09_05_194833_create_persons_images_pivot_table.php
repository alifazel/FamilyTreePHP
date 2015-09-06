<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsImagesPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('persons_images', function($table) {
                $table->increments('id');
                $table->integer('person_id')->unsigned();
                $table->foreign('person_id')->references('id')->on('persons');
                $table->integer('image_id')->unsigned();
                $table->foreign('image_id')->references('id')->on('persons');
                $table->date('created_at');
                $table->date('updated_at');
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
        Schema::drop('persons_images');
    }
}
