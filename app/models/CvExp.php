<?php

class CvExp extends \Eloquent {

    protected $table = 'tbl_cv_exp';

    public static $rules = array(
		'com_name'=>'required',
		'pos'=> 'required'
		);

}