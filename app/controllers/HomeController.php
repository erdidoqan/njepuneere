<?php

class HomeController extends BaseController {

	public function home()
	{
		//if(Agent::isMobile()){
		//	return View::make('site.mobile');
		//}else{

			$adsInfo = AdsInfo::where('active','=',1)->orderBy('created_at','DESC')->paginate(24); 
			return View::make('site.index')->with('adsInfo', $adsInfo);
		//}
	}

	public function ads($id)
	{
		$last = Ads::orderBy('created_at','DESC')->paginate(12); 
		$adsInfo = AdsInfo::find($id);
		$ads = Ads::find($id);
		if (Auth::check()){
			$checkCv = Cv::where('user_id','=',Auth::user()->id)->first();
			$cv = Cv::where('user_id','=',Auth::user()->id)->orderBy('created_at','DESC')->paginate(5);
		}

		return View::make('ilan.show')->with(compact('adsInfo', 'ads', 'cv', 'last', 'checkCv'));
		
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getSearch()
	{
		$search = Input::get('search');
		$workPlace = Input::get('work_place');

		$results = Ara::where('work_place', $workPlace)->where('active','=',1)->search($search, 0)->orderBy('id','DESC')->paginate(10);
  		//$data = $this->AdsInfo->getByPage($page, 50);
		//$results = AdsInfo::where('ads_name', 'LIKE', '%'.$search.'%')->paginate();

		return View::make('ilan.search-list', compact('search', 'results','workPlace'));

	}

	public function aboutus()
	{
		return View::make('site.about');
	}

	public function term()
	{
		return View::make('site.term');
	}

	public function content()
	{
		return View::make('site.content');
	}

	public function privacy()
	{
		return View::make('site.privacy');
	}
	
	public function membership()
	{
		return View::make('site.membership');
	}

	public function getNewPassword($code)
    {
        $user = Birey_user::where('code', '=', $code)->where('password_temp', '!=', '');
        if($user->count()) {
            
            $user = $user->first();
            
            $user->sifre = $user->password_temp;
            $user->password_temp = '';
            $user->code = '';
            
            if($user->save()) {
                return Redirect::to('BireyGiris')->with('success', 'Your account has been recovered and you can sign in with your new password.');
            }
        }
        
        return Redirect::to('BireyGiris')->with('error', 'Could not request new password.');
    }

	public function forgot()
    {
        $validator = Validator::make(Input::all(), array(
            'email' => 'required|email'
        ));
        
        if($validator->fails()) {
            
            return  Redirect::back()
                    ->withErrors($validator)
                    ->withInput();
            
        } else {
            
            $user = Birey_user::where('email', '=', Input::get('email'));
            
            if($user->count()) {
                
                $user = $user->first();
                
                $code = str_random(60);
                $password = str_random(10);
                
                $user->code = $code;
                $user->password_temp = Hash::make($password);
                
                if($user->save()) {
                    
                    Mail::send('emails.auth.reminder', 
                        array('link'=> URL::to('new-password', $code), 'username' => $user->username, 'password' => $password), 
                        function($message) use ($user) {
                            $message->to($user->email, $user->username)->subject('Your new password');
                        }
                    );
                    return  Redirect::back()
                            ->with('success', 'We have sent you a new password by email.');
                }
            }
            
        }
        return Redirect::to('BireyGiris')->with('error', 'Could not request new password.');       
    }
}
