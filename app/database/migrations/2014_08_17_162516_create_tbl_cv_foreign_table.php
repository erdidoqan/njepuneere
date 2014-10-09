<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCvForeignTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_cv_foreign', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('languages');
			$table->string('reading');
			$table->string('writing');
			$table->string('speaking');
			$table->string('learned');
			$table->integer('user_id');
			$table->integer('cv_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tbl_cv_foreign');
	}

}
