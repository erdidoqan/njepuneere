<?php

class FacebookController extends \BaseController
{
	
	private $fb;

	public function __construct(FacebookHelper $fb){
		$this->fb = $fb;
	}

	public function login(){
		return Redirect::to($this->fb->getUrlLogin());
	}

	public function callback(){
		if ( !$this->fb->generateSessionFromRedirect()){
			return Redirect::to('BireyGiris')->with('error',"Error connection to Facebook.");
		}
		$user_fb = $this->fb->getGraph();
		if(empty($user_fb)) {
			return Redirect::to('BireyGiris')->with('Error',"Failed to retrieve data from facebook");
		}
		$user = Birey_user::whereUidFb($user_fb->getProperty('id'))->first();
		if(empty($user)){
			$user = new Birey_user;
			$user->email = $user_fb->getProperty('email');
			$user->adi = $user_fb->getProperty('first_name');
			$user->soyadi = $user_fb->getProperty('last_name');
			//$user->d_tarihi = $user_fb->getProperty('birthday');
			$user->cinsiyet = $user_fb->getProperty('gender');
			$user->ulke = $user_fb->getProperty('locale');
			$user->about_me = $user_fb->getProperty('about');
			$user->pr_img = 'http://graph.facebook.com/' . $user_fb->getProperty('id') . '/picture?type=large';
			$user->uid_fb = $user_fb->getProperty('id');

			$user->save();
		}
		$user->access_token_fb = $this->fb->getToken();
		$user->save();

		Auth::login($user);
		return Redirect::to('/')->with('success',"connection with facebook");
	}
}