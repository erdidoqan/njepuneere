<?php

class Cert extends \Eloquent {

    protected $table = 'tbl_cv_cert';

    public static $rules = array(
		'cer_name'=>'required'
		);

}