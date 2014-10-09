<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBireyUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('birey_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('adi');
			$table->string('soyadi');
			$table->string('email');
			$table->string('sifre');
			$table->string('passwordConfirm');
			$table->string('cinsiyet');
			$table->date('d_tarihi');
			$table->string('tel');
			$table->string('ulke');
			$table->string('sehir');
			$table->string('uni');
			$table->text('sonis');
			$table->string('durum');
			$table->string('remember_token');
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
		Schema::drop('birey_user');
	}

}
