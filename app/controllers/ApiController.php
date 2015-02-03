<?php

class ApiController extends \BaseController {

    public function showApi()
    {   
        $ads = AdsInfo::all();
        $ads = '{"physical":"cables","data link":"mac address","network":"ip address","transport":"tcp","session":"application connections","presentation":"translation","application":"email"}';
        $ads = json_decode($ads, true);

        return Response::json($ads);
    }
}
