<?php

class imgUpController extends \BaseController{

	public function pr_img()
	{
		$input = Input::all();
		$v = Validator::make($input, User::$rules);

		if($v->passes()){
			$pr_img = new User;

			$pr_img = Input::file('pr_img');
			$filename = time(). '.' .$logo->getClientOriginalExtension();
			$path = public_path('img/pr_img/' . $filename);
			Image::make($pr_img->getRealPath())->save($path);
			$pr_img->img = 'http://localhost/karrieraDene/public/img/pr_img'.$filename;
			$pr_img->user_id = Auth::user()->id;
			$pr_img->save;
		}
	}
}