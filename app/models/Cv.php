<?php

class Cv extends \Eloquent {

    protected $table = 'tbl_new_cv';

    public static $rules = array(
		'resume_name' => 'required',
		'languages' => 'required'
		);

}