<?php

class UserController extends \BaseController {

	public function image()
	{
		$data['pr_img'] = Session::get('pr_img');
		$data['modal'] = (Session::get('modal') == null ? 'false' : 'true');
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_pre = Pre::where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		$user = Birey_user::find(Auth::user()->id);
		return View::make('cv.image')
		->with('data',$data)
		->with('user', $user)
		->with('noti_cv',$noti_cv)
		->with('noti_pre',$noti_pre)
		->with('noti_app',$noti_app);	
	}

	public function post_img($id)
	{
		$sirket = Birey_user::find($id);
		$input = Input::all();
		$rules = array ('pr_img' => 'required|image|max:1000');
		$v = Validator::make($input,$rules);

		if($v->passes())
		{
			if(Input::hasFile('pr_img')){
				$pr_img = Input::file('pr_img');
		        $filename  = $sirket->com_name.'-'.$sirket->id. '.'.$pr_img->getClientOriginalExtension();
		        $path = public_path("/img/pr_img/".$filename);
	            Image::make($pr_img->getRealPath())->save($path);
		        $pr_img = 'img/pr_img/'.$filename;
		        $pr_img = Birey_user::where('id','=',$id)->update(array('pr_img' => $pr_img));

		        Session::put('modal', 'true');
		    } else {
		    	$path = Input::get('img_bckp');
		    }
	        Session::put('pr_img', $path);
	        return Redirect::back()->with('success', 'Profile image successfully updated.');
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
		return Redirect::back()->with('success', 'Profile image successfully updated.');
	}

}