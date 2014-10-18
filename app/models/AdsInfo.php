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

	public function getByPage($page = 1, $limit = 10)
	{
	  $results = AdsInfo;
	  $results->page = $page;
	  $results->limit = $limit;
	  $results->totalItems = 0;
	  $results->items = array();
	 
	  $ads = AdsInfo::skip($limit * ($page - 1))->take($limit)->get();
	 
	  $results->totalItems = AdsInfo::count();
	  $results->items = $ads->all();
	 
	  return $results;
	}
}