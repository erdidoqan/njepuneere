<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	$input = Input::get('search');
		$results = AdsInfo::where('ads_name', 'LIKE', '%'.$input.'%')->paginate(15);
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function search()
	{
		$client = new Elasticsearch\Client();
		$indexParams['index']  = 'my_index';    //index
		$client->indices()->create($indexParams);
		
		$searchParams['index'] = 'job';
		$searchParams['type']  = 'job_type';
		$searchParams['body']['query']['match']['testField'] = 'abc';
		$retDoc = $client->search($searchParams);

		return View::make('ilan.search-list')->with('results', $results)->with('input',$input);
	}

}
