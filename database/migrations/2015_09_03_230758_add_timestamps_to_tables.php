<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampsToTables extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('users', function($table) {
			$table->date('created_at');
			$table->date('updated_at');
		});

		Schema::table('persons', function($table) {
		   $table->date('created_at');
		   $table->date('updated_at');
	   });

		Schema::table('images', function($table) {
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
		Schema::table('users', function($table) {
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
		});

		Schema::table('persons', function($table) {
		   $table->dropColumn('created_at');
		   $table->dropColumn('updated_at');
	   });

		Schema::table('images', function($table) {
		   $table->dropColumn('created_at');
		   $table->dropColumn('updated_at');
	   });
	}
}
