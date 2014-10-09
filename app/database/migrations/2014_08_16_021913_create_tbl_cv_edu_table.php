<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCvEduTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_cv_edu', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('edu_level');
			$table->string('school_name');
			$table->string('department');
			$table->string('ulke');
			$table->string('sehir');
			$table->date('gra_date');
			$table->string('gra_deg');
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
		Schema::drop('tbl_cv_edu');
	}

}
