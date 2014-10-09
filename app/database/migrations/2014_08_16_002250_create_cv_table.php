<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCvTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cv', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pos');
			$table->string('com_name');
			$table->string('com_sec');
			$table->string('workspace');
			$table->string('com_role');
			$table->string('work_style');
			$table->string('ulke');
			$table->string('sehir');
			$table->date('start_day');
			$table->date('end_day');
			$table->integer('user_id');
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
		Schema::drop('cv');
	}

}
