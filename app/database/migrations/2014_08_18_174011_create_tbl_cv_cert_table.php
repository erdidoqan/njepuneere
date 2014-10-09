<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTblCvCertTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_cv_cert', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cer_work');
			$table->string('cer_name');
			$table->string('cer_com');
			$table->string('cer_year');
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
		Schema::drop('tbl_cv_cert');
	}

}
