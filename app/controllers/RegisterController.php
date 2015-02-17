<?php

class RegisterController extends \BaseController {

	public function getRegister()
	{
		if (!Auth::user())
		{
		    return View::make('auth.register');
		} else {
			return Redirect::to('/');
		}
		
	}

	public function postRegister()
	{
		
		$input = Input::all();
		$rules = array ('adi' => 'required',
						'soyadi' => 'required',
						'email'=> 'required|unique:birey_user|email',
						'sifre' => 'required');
		$v = Validator::make($input,$rules);

		if($v->fails()) {
            return  Redirect::back()->withErrors($v)->withInput();
        } else {

			$username = Input::get('adi');
            $email = Input::get('email');
            $password = Input::get('sifre');
            
            //Gravatar
            $avatar = "{{URL::to('img/avatars/male.png')}}";
            
            //dogum tarihi
            $d_tarihi = Input::get('yy') . '-' . Input::get('mm') . '-' . Input::get('dd');

            //Activation Code
            $code = str_random(60);
            
            $user = new Birey_user;
			$user->adi = $username;
			$user->soyadi = Input::get('soyadi');
			$user->email = $email;
			$user->sifre = Hash::make($password);
			$user->passwordConfirm = Hash::make(Input::get('passwordConfirm'));
			$user->cinsiyet = Input::get('cinsiyet');
			$user->d_tarihi = $d_tarihi;
			$user->tel = Input::get('tel');
			$user->ulke = Input::get('ulke');
			$user->sehir = Input::get('sehir');
			$user->uni = Input::get('uni');
			$user->sonis = Input::get('sonis');
			$user->durum = Input::get('durum');
			$user->about_me = Input::get('about_me');
			$user->code = $code;
            $user->active = 0;
            $user->pr_img = '/img/avatars/male.png';

            if($user->save()){
                Mail::send('emails.auth.activate', 
                	array('link'=> URL::to('activate', $code), 'username'=>$username), 
                	function($message) use ($user)
					{
    					$message->to($user->email, $user->adi)->subject('Activate your account!');
					});

                $kimlik =  array('email' => Input::get('email'), 'password' => Input::get('sifre'));
                if(Auth::attempt($kimlik)){
					return Redirect::to('/');
				} else {
					return Redirect::to('BireyGiris')->with('error', 'email and password does not match.');
				}
                
			}
			return Redirect::to('BireyKayit')->withErrors($v);
		}
	}




	public function getActivate($code)
    {
        $user = Birey_user::where('code', '=', $code)->where('active', '=', 0);
        if($user->count()){
            $user = $user->first();
            
            $user->active = 1;
            $user->code = '';
            
            if($user->save()) {
                return  Redirect::to('BireyGiris')
                        ->with('success', 'Account activated. You can now signin.');
            }
        }
        
        return Redirect::to('BireyGiris')->with('error', 'We could not activate your account. Please, try again later.');
    }

}