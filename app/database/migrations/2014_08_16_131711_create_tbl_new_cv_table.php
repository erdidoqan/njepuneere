<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblNewCvTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_new_cv', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('resume_name');
			$table->string('languages');
			$table->integer('user_id');
			$table->integer('rate');
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
		Schema::drop('tbl_new_cv');
	}

}
