<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblNewApplyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_new_apply', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('ads_id');
			$table->integer('adsInfo_id');
			$table->string('apply');
			$table->unique(array('ads_id', 'user_id'));
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
		Schema::drop('tbl_new_apply');
	}

}
