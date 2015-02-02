<?php

class MyPageController extends BaseController {

	public function myPage()
	{
		$cv = Cv::where('user_id','=',Auth::user()->id)->where('status','=',1)->first();
			if(empty($cv)){
				return Redirect::to('/my-resume');
			}
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
 		$apply = DB::table('vi_new_app')->where('user_id','=',Auth::user()->id)->orderBy('created_at','DESC')->paginate(15);
		
		return View::make('cv.my-page')
		->with('cv',$cv)
		->with('apply',$apply)
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);	
	}

	public function pre_written()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		$pre = DB::table('tbl_prewritten')->where('user_id','=',Auth::user()->id)->orderBy('created_at','DESC')->paginate();

		return View::make('cv.prewritten')
		
		->with('pre',$pre)
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);	
	}

	public function resume()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		$cv = Cv::where('user_id','=',Auth::user()->id)->orderBy('status','DESC')->paginate(5);

		return View::make('cv.resume')

		->with('cv',$cv)
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);
	}

	public function create_resume()
	{
		$cv = Cv::where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->first();


		$noti_exp = DB::table('tbl_cv_exp')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_edu = DB::table('tbl_cv_edu')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_intern = DB::table('tbl_cv_intern')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_foreign = DB::table('tbl_cv_foreign')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_compe = DB::table('tbl_cv_compe')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_cert = DB::table('tbl_cv_cert')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_ref = DB::table('tbl_cv_ref')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();

		$cv_exp = CvExp::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_edu = CvEdu::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5);
		$cv_intern = Intern::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_foreign = Foreign::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_compe = Compe::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_cert = Cert::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_ref = CvRef::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
 
		return View::make('cv.create-resume')
		->with('cv',$cv)->with('cv_exp',$cv_exp)->with('cv_edu',$cv_edu)->with('noti_exp',$noti_exp)->with('noti_edu',$noti_edu)
		->with('cv_intern',$cv_intern)->with('cv_foreign',$cv_foreign)->with('noti_intern',$noti_intern)->with('noti_foreign',$noti_foreign)->with('noti_ref',$noti_ref)
		->with('cv_compe',$cv_compe)->with('cv_cert',$cv_cert)->with('cv_ref',$cv_ref)->with('noti_compe',$noti_compe)->with('noti_cert',$noti_cert);
	}

	public function create_resume_id($id)
	{
		$cv = Cv::where('user_id','=',Auth::user()->id)->where('id',$id)->first();

		$noti_exp = DB::table('tbl_cv_exp')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_edu = DB::table('tbl_cv_edu')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_intern = DB::table('tbl_cv_intern')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_foreign = DB::table('tbl_cv_foreign')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_compe = DB::table('tbl_cv_compe')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_cert = DB::table('tbl_cv_cert')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();
		$noti_ref = DB::table('tbl_cv_ref')->where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->count();

		$cv_exp = CvExp::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_edu = CvEdu::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_intern = Intern::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_foreign = Foreign::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(5); 
		$cv_compe = Compe::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(50); 
		$cv_cert = Cert::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(50); 
		$cv_ref = CvRef::where('user_id','=',Auth::user()->id)->where('cv_id','=',$cv->id)->orderBy('id','DESC')->paginate(50); 
		
		return View::make('cv.create-resume')
		->with('cv',$cv)->with('cv_exp',$cv_exp)->with('cv_edu',$cv_edu)->with('noti_edu',$noti_edu)->with('noti_intern',$noti_intern)->with('noti_ref',$noti_ref)
		->with('cv_intern',$cv_intern)->with('cv_foreign',$cv_foreign)->with('noti_exp',$noti_exp)->with('noti_foreign',$noti_foreign)->with('noti_cert',$noti_cert)
		->with('cv_compe',$cv_compe)->with('cv_cert',$cv_cert)->with('cv_ref',$cv_ref)->with('noti_foreign',$noti_foreign)->with('noti_compe',$noti_compe);
	}

	public function application()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		$apply = DB::table('vi_new_app')->where('user_id','=',Auth::user()->id)->orderBy('created_at','DESC')->paginate();

		return View::make('cv.application')
		
		->with('apply',$apply)
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);	
	}
	public function prewrittenic()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		return View::make('cv.prewritten-ic')->with('noti_cv',$noti_cv)->with('noti_app',$noti_app);
	}
	public function image()
	{
		$data['pr_img'] = Session::get('pr_img');
		$data['modal'] = (Session::get('modal') == null ? 'false' : 'true');
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		
		return View::make('cv.image')
		->with('data',$data)
		->with('noti_cv',$noti_cv)
		->with('noti_app',$noti_app);	
	}

	public function changePass()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		return View::make('cv.password', compact('noti_cv','noti_app'));
	}
}


