<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{	
		//
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('email', 255);
			$table->string('username', 255);
			$table->string('password', 255);
			$table->integer('person_id')->unsigned()->nullable();
			$table->rememberToken();
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
		Schema::drop('users');
	}
}
