<?php

class ApiController extends \BaseController {

    public function showApi()
    {   
        $ads = AdsInfo::all();

        return Response::json($ads);
    }
}
