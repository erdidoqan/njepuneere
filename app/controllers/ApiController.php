<?php

class ApiController extends \BaseController {

    public function showAdsApi()
    {   
        $ads = AdsInfo::get(array('ads_name', 'com_name', 'job_desc', 'qua', 'logo'));

        $ads = json_decode($ads, true);

        return Response::json($ads);
    }
    public function showUserApi()
    {   
        $ads = Birey_user::all();

        $ads = json_decode($ads, true);

        return Response::json($ads);
    }
}
