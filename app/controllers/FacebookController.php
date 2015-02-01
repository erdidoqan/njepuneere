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

		dd($this->fb->getGraph());

	}
}