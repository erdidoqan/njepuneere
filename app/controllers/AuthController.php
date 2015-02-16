<?php

class AuthController extends \BaseController 
{

	public function user_update()
	{
		$user = Auth::user();
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		return View::make('auth.userup')->with('noti_cv',$noti_cv)->with('noti_app',$noti_app)->with('user',$user);
	}
	
	public function post_img($id)
	{
		$input = Input::all();
		$rules = array ('pr_img' => 'required|image|max:1000');
		$v = Validator::make($input,$rules);

		if($v->passes()){
			$pr_img = Input::file('pr_img');
			$filename = Auth::user()->adi.Auth::user()->soyadi.'-'.Auth::user()->id.'.jpg';//burada ayni isimde kaydettiriyorum sorun olabilir!
			$path = public_path('img/pr_img/' . $filename);
			Image::make($pr_img->getRealPath())->resizeCanvas(10, -10, 'center', true)->save($path);
			$pr_img = '/img/pr_img/'.$filename;
			$pr_img = User::where('id', '=', Auth::user()->id)->update(array('pr_img' => $pr_img));

			return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	public function crop($id)
	{
		Session::forget('modal');
		$img = Session::get('pr_img');

		$pr_img = Image::make($img);
		$pr_img->crop(intval(Input::get('w')), intval(Input::get('h')), intval(Input::get('x')), intval(Input::get('y')));
		$pr_img->save($img);
		return Redirect::back();
	}

	

}
	

