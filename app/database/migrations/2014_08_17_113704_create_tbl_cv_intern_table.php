<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCvInternTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_cv_intern', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pos');
			$table->string('com_name');
			$table->string('ulke');
			$table->string('sehir');
			$table->string('period');
			$table->string('com_sec');
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
		Schema::drop('tbl_cv_intern');
	}

}
