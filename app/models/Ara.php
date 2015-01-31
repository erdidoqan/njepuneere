<?php

use Nicolaslopezj\Searchable\SearchableTrait;

class Ara extends \Eloquent
{
    use SearchableTrait;
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $table = 'ads_infos';
    protected $searchable = [
        'columns' => [
            'ads_name' => 10,
            'com_name' => 10,
            'work_place' => 2,
            'languages' => 5,
            'job_desc' => 50,
            'qua' => 50,
        ],
    ];

    

}