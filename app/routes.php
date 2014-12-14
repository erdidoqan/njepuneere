<?php

//get Controller
Route::get('/', "HomeController@home");
Route::get('ads/{id}', "HomeController@ads");
Route::get('BireyKayit', "AuthController@getBireyKayit");
Route::get('activate/{code}', "AuthController@getActivate");
Route::get('BireyGiris', array('as'=>'BireyGiris', 'uses'=>'AuthController@getBireyGiris'));
Route::get('logout', "AuthController@logout");
Route::get('ilanVerme', "AuthController@getilanVerme");
Route::get('aboutus', "HomeController@aboutus");
Route::get('term-of-use', "HomeController@term");
Route::get('use-of-content', "HomeController@content");
Route::get('privacy', "HomeController@privacy");
Route::get('term-of-membership', "HomeController@membership");

//Post Controller
Route::post('BireyGiris', "AuthController@postBireyGiris");
Route::post('pr_img', "AuthController@postPr_img");
Route::post('BireyKayit', "AuthController@postBireyKayit");
Route::post('search', "HomeController@getSearch");

//Afteer Auth Controller


//Before Auth Controller
Route::group(array('before' => 'auth'), function(){
	Route::get('/my-page', "MyPageController@myPage");
	Route::get('/my-resume', "MyPageController@resume");
	Route::get('/create-resume', "MyPageController@create_resume");
	Route::get('/create-resume/{id}', "MyPageController@create_resume_id")->where('id', '[0-9]+');
	Route::get('/my-application', "MyPageController@application");
	Route::get('/pre-written', "MyPageController@pre_written");
	Route::get('/user-up', "AuthController@user_update");
	Route::get('/prewrittenic', "MyPageController@prewritten-ic");

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
});

//Message Controller
Route::group(array('before' => 'auth'), function(){
	Route::get('/message',"MessageController@index");
	Route::get('/message/open/{id}',"MessageController@open");
	Route::get('/message/compose',"MessageController@compose");
});
