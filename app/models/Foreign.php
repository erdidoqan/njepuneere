<?php

class Foreign extends \Eloquent {

    protected $table = 'tbl_cv_foreign';

    public static $rules = array(
		'languages'=>'required'
		);

}