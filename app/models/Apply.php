<?php

class Apply extends \Eloquent {

    protected $table = 'tbl_new_apply';

    public static $rules = array(
		'ads_id' => 'unique:ads_id, adsInfo_id, user_id'
		);

}

