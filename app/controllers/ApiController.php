<?php

class ApiController extends \BaseController {

    public function showApi()
    {   
        $users = Birey_user::all();

        return Response::json($users);
    }
}