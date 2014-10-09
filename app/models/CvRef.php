<?php

class CvRef extends \Eloquent {

    protected $table = 'tbl_cv_ref';

    public static $rules = array(
		'namesname'=>'required',
		'com_name'=> 'required'
		);

}