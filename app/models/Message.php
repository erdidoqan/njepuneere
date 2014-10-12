<?php

class Message extends \Eloquent {

    protected $table = 'tbl_message';

    public static $rules = array(
		'message'=>'required'
		);

}