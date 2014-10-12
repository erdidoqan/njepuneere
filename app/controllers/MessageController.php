<?php

class MessageController extends \BaseController {
	public function index()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
 		$message = Message::where('birey_id','=',Auth::user()->id)->orderBy('id','DESC')->paginate(5);

		return View::make('cv.message.message')
		->with('noti_cv',$noti_cv)
		->with('message',$message)
		->with('noti_app',$noti_app);
	}
	public function open()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();

		return View::make('cv.message.open')
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);
	}

	public function compose()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();

		return View::make('cv.message.compose')
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);
	}
}