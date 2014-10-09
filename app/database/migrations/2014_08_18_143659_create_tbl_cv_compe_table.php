<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCvCompeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_cv_compe', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('compe_name');
			$table->string('exp');
			$table->string('exprience');
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
		Schema::drop('tbl_cv_compe');
	}

}
