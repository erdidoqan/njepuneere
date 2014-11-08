<?php

Route::get('/', function()
{
	$adsInfo = AdsInfo::orderBy('created_at','DESC')->paginate(16); 
	return View::make('site.index')->with('adsInfo', $adsInfo);
});
Route::get('ads/{id}',function($id)
	{
		$last = Ads::orderBy('created_at','DESC')->paginate(12); 
		$adsInfo = AdsInfo::find($id);
		$ads = Ads::find($id);

		return View::make('ilan.show')->with('adsInfo',$adsInfo)->with('ads',$ads)->with('last',$last);
	});


Route::post('search', array('as'=>'search', 'uses'=>'HomeController@getSearch'));
Route::get('BireyKayit', 'AuthController@getBireyKayit');
Route::post('BireyKayit', 'AuthController@postBireyKayit');
Route::get('activate/{code}', 'AuthController@getActivate');
Route::post('pr_img', 'AuthController@postPr_img');
Route::get('BireyGiris', array('as'=>'login', 'uses'=>'AuthController@getBireyGiris'));
Route::post('BireyGiris', array('as'=>'BireyGiris', 'uses'=>'AuthController@postBireyGiris'));
Route::get('logout', 'AuthController@logout');
Route::get('ilanVerme', 'AuthController@getilanVerme');

Route::group(array('before' => 'auth'), function(){
	Route::get('my-page', array('as'=>'my-page', 'uses'=>'MyPageController@myPage'));
	Route::get('my-resume', array('as'=>'my-page', 'uses'=>'MyPageController@resume'));
	Route::get('create-resume', array('as'=>'create-resume', 'uses'=>'MyPageController@create_resume'));
	Route::get('create-resume/{id}', array('as'=>'my-page', 'uses'=>'MyPageController@create_resume_id'))->where('id', '[0-9]+');
	Route::get('my-application', array('as'=>'my-application', 'uses'=>'MyPageController@application'));
	Route::get('pre-written', array('as'=>'pre-written', 'uses'=>'MyPageController@pre_written'));
	Route::get('user-up', array('as'=>'user-up', 'uses'=>'AuthController@user_update'));


	Route::resource('cv', "CvController");
	Route::resource('exp', "ExpController");
	Route::resource('edu', "EduController");
	Route::resource('intern', "InternController");
	Route::resource('foreign', "ForeignController");
	Route::resource('compe', "CompeController");
	Route::resource('cert', "CertController");
	Route::resource('ref', "RefController");
	Route::resource('apply', "ApplyController");
	Route::resource('prewritten', "PrewrittenController");
	Route::post('/cv/cvstatus' , "CvController@cvstatus");

	Route::get('prewritten-ic', function()
	{
		$noti_cv = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->count();
		$noti_app = DB::table('tbl_new_apply')->where('user_id','=',Auth::user()->id)->count();
		return View::make('cv.prewritten-ic')->with('noti_cv',$noti_cv)->with('noti_app',$noti_app);
	});
});

Route::group(array('before' => 'auth'), function(){
	Route::get('/message',"MessageController@index");
	Route::get('/message/open/{id}',"MessageController@open");
	Route::get('/message/compose',"MessageController@compose");
});
