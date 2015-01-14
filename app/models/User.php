<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'birey_user';

	public static $rules = array(
		'email' => 'required|unique:birey_user',
		'sifre' => 'required' 
		);
	public static $img_sirket_src = 'http://institutional.njepuneere.loc/';//kullanilisi -> User::$img_sirket_src."".
	//public static $img_home_src = 'http://njepuneere.com';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('sifre');

	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		return $this->sifre;
	}

	public function getReminderEmail()
	{
		return $this->email;
	}

	public function post()
	{
		return $this->hasMany('Post');
	}

}
