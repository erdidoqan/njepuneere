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
            'work_place' => 10,
            'languages' => 5,
            'job_desc' =>50,
            'qua' =>50,
        ],
        'joins' => [
            'Ads' => ['ads_infos.user_id','Ads.user_id'],
        ],
    ];

    public function posts()
    {
        return $this->hasMany('Ads');
    }

}