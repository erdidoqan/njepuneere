<?php
/**
* @author Erdi Dogan
* @web erdi.pw
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserFbMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_fb_meta', function(Blueprint $table) {
			
			$table->increments('id');
			$table->bigInteger('fbID')->unsigned()->default(0);
			$table->integer('userID')->unsigned()->default(0);

			$table->string('first_name',400)->default('');
			$table->string('last_name',400)->default('');
			$table->string('link',400)->default(''); //facebook adres linki
			$table->string('location_id',400)->default(''); //location[id]
			$table->string('location_name',400)->default(''); //location[name]
			$table->string('gender',100)->default(''); //male/female/?????
			$table->string('email',400)->default(''); //email adresi
			$table->string('timezone',100)->default(''); //timezone
			$table->string('locale',100)->default(''); //en_US gibi, tr_TR gibi
			$table->enum('verified',array('0','1'))->default('1'); //boolean geliyor, true 1, false 0 olur
			$table->string('updated_time',100)->default(''); // 2014-01-14T09:05:55+0000 , son profil güncelleme sanırm
			$table->string('username',100)->default(''); //facebook.com/{kullanici_adi} gibi.

			$table->longText('rawData')->default(''); //raw data jsona çevrilmiş


			$table->index('fbID');
			$table->index('email');
			$table->foreign('userID')->references('id')->on('users')->onDelete('cascade');

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
		Schema::drop('user_fb_meta');
	}

}