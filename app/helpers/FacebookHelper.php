<?php

Use Facebook\FacebookSession;
Use Facebook\FacebookRedirectLoginHelper; 

class FacebookHelper 
{
	private $helper;
	public function __construct (){
		FacebookSession::setDefaultApplication(Config::get('facebook.app_id'), Config::get('facebook.app_secret'));
	
		$this->helper = new FacebookRedirectLoginHelper(url('facebook/login/callback'));
	}

	public function getUrlLogin(){
		return $this->helper->getLoginUrl(Config::get('facebook.app_scope'));
	}
}