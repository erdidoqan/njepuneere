<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Birey_user extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'Birey_user';

	public static $rules = array(
		'email' => 'required|unique:birey_user',
		'sifre' => 'required' 
		);

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
