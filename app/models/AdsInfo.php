<?php

class AdsInfo extends \Eloquent {
	protected $table = 'ads_infos';

	public static $rules = array(
		'com_name'=>'required',
		'logo' => 'required|image|max:500',
		'job_desc'=> 'required'
		);
	public function user(){
		return $this->belongsTo('User','user_id');
	}
}