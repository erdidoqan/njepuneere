<?php
	class AuthController extends BaseController {

		/* Kullanıcı Kayıdı */
		public function getBireyKayit()
		{
			if (!Auth::user())
			{
			    return View::make('auth.register');
			} else {
				return Redirect::to('/');
			}
			
		}
		public function postBireyKayit()
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
	            $user->pr_img = 'img/avatars/male.png';

	            if($user->save()){
	                Mail::send('emails.auth.activate', 
	                	array('link'=> URL::to('activate', $code), 'username'=>$username), 
	                	function($message) use ($user)
						{
	    					$message->to($user->email, $user->adi)->subject('Activate your account!');
						});
	                return  Redirect::back()
	                        ->with('success', 'Your account has been created. We have sent you an e-mail to activate your account.');
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

		public function postPr_img()
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

		/* Kullanıcı Girişi */
		public function getBireyGiris()
		{
			if (Auth::check()) return Redirect::to('/');
			return View::make('auth.login');
		}
		
		public function postBireyGiris()
		{
			$input = Input::all();
			$rules = array('email' => 'required', 'sifre' => 'required');
			$v = Validator::make($input, $rules);
			if($v->passes())
			{
				$remember = (Input::has('remember')) ? true : false;
				$kimlik = array('email' => Input::get('email'), 'password' => Input::get('sifre'), 'active' => 1);
				if(Auth::attempt($kimlik, $remember)){
					return Redirect::back();
				} else {
					return Redirect::to('BireyGiris')->with('error', 'Email or password wrong, or account not activated.');
				}
			}
			return Redirect::to('BireyGiris')->with('error', 'There was a problem signing you in.');
		}

		public function user_update()
		{
			$user = Auth::user();
			$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
			$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
			return View::make('auth.userup')->with('noti_cv',$noti_cv)->with('noti_app',$noti_app)->with('user',$user);
		}

		public function logout()
		{

			Auth::logout();
			return Redirect::to('/');
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
	}
