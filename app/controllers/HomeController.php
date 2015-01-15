<?php

class HomeController extends BaseController {
	public function home()
	{
		$adsInfo = AdsInfo::orderBy('created_at','DESC')->paginate(24); 
		return View::make('site.index')->with('adsInfo', $adsInfo);
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
  		//$data = $this->AdsInfo->getByPage($page, 50);
		$results = AdsInfo::where('ads_name', 'LIKE', '%'.$search.'%')->paginate();

		return View::make('ilan.search-list', compact('search', 'results'));

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
}
