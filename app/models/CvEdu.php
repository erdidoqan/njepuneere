<?php

class CvEdu extends \Eloquent {

    protected $table = 'tbl_cv_edu';

    public static $rules = array(
		'edu_level'=>'required',
		'school_name'=> 'required'
		);

}