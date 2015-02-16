<?php

class LoginController extends \BaseController {

	public function getLogin()
	{
		if (!Auth::user()){
		    return View::make('auth.login');
		} else {
			return Redirect::to('/');
		}
	}

	public function logout()
	{

		Auth::logout();
		return Redirect::to('/');
	}

	public function postLogin()
	{
		$input = Input::all();
		
		$rules = array('email' => 'required|exists:Birey_user', 'sifre' => 'required');
		$v = Validator::make($input, $rules);

		if($v->passes())
		{
			$remember = (Input::has('remember')) ? true : false;
			$kimlik = array('email' => Input::get('email'), 'password' => Input::get('sifre'));
			if(Auth::attempt($kimlik, $remember)){
				return Redirect::to('/');
			} else {
				return Redirect::to('BireyGiris')->with('error', 'email and password does not match.');
			}
		}
		return Redirect::to('BireyGiris')->with('error', 'There was a problem signing you in.');
	}

}