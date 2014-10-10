<?php

class Pre extends \Eloquent {

    protected $table = 'tbl_prewritten';

    public static $rules = array(
		'prewr_name'=>'required:unique',
		'prewritten'=> 'required'
		);

}