<?php

//get Controller
Route::get('mobile', "HomeController@mobile");

Route::get('/', "HomeController@home");
Route::get('pune/{id}', "HomeController@ads");
Route::get('BireyKayit', "RegisterController@getRegister");
Route::get('activate/{code}', "RegisterController@getActivate");
Route::get('BireyGiris', array('as'=>'BireyGiris', 'uses'=>'LoginController@getLogin'));
Route::get('logout', "LoginController@logout");
Route::get('ilanVerme', "AuthController@getilanVerme");
Route::get('aboutus', "HomeController@aboutus");
Route::get('term-of-use', "HomeController@term");
Route::get('use-of-content', "HomeController@content");
Route::get('privacy', "HomeController@privacy");
Route::get('term-of-membership', "HomeController@membership");
Route::get('new-password/{code}', "HomeController@getNewPassword");
Route::get('results', "HomeController@getSearch");
Route::get('facebook/login', "FacebookController@login");
Route::get('facebook/login/callback', "FacebookController@callback");
Route::get('api/ads', "ApiController@showAdsApi");
Route::get('api/user', "ApiController@showUserApi");

//Post Controller
Route::post('BireyGiris', "LoginController@postLogin");
Route::post('BireyKayit', "RegisterController@postRegister");
Route::post('forgot', "HomeController@forgot");


//Afteer Auth Controller


//Before Auth Controller
Route::group(array('before' => 'auth'), function(){
	Route::get('/my-page', "MyPageController@myPage");
	Route::get('/change-password', "MyPageController@changePass");
	Route::get('/my-resume', "MyPageController@resume");
	Route::get('/create-resume', "MyPageController@create_resume");
	Route::get('/create-resume/{id}', "MyPageController@create_resume_id")->where('id', '[0-9]+');
	Route::get('/my-application', "MyPageController@application");
	Route::get('/pre-written', "MyPageController@pre_written");
	Route::get('/user-up', "AuthController@user_update");
	Route::get('/prewritten-ic', "MyPageController@prewrittenic");
	Route::get('/pr-image', "UserController@image");
	Route::get('/send-again', "RegisterController@SendAgain");

	//Resource Controller
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
	Route::post('/pr_img/{id}' , "UserController@post_img");
	Route::post('/crop/{id}', "UserController@crop");
	Route::post('/password', "CvController@password");
	Route::post('/resume-name/{id}', "CvController@resumeName");
});

//Message Controller
Route::group(array('before' => 'auth'), function(){
	Route::get('/message',"MessageController@index");
	Route::get('/message/open/{id}',"MessageController@open");
	Route::get('/message/compose',"MessageController@compose");
});
