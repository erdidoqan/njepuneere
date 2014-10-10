<?php

class MessageController extends \BaseController {
	public function index()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();

		return View::make('cv.message.message')
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);
	}
	public function opened_message()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();

		return View::make('cv.message.opened_message')
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);
	}
}