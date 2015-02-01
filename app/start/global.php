<?php
ClassLoader::addDirectories(array(

	app_path().'/commands',
	app_path().'/controllers',
	app_path().'/models',
	app_path().'/database/seeds',
	app_path().'/helpers',

));

Log::useFiles(storage_path().'/logs/laravel.log');
App::error(function(Exception $exception, $code)
{
	Log::error($exception);
	//return View::make('site.404');
});

App::down(function()
{
	return Response::make("Be right back!", 503);
});

require app_path().'/filters.php';
require app_path().'/helper.php';