<?php

class Ads extends \Eloquent {
	protected $table = 'Ads';


	public static $rules = array(
		'position'=>'required',
		'sector'=>'required',
		'exp'=> 'required'
		);
	public function user(){
		return $this->belongsTo('User','user_id');
	}

}
