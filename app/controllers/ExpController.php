<?php

class ExpController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('cv.create-resume');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('cv.create-resume');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($cv)
	{
		$input = Input::all();
		$v = Validator::make($input, CvExp::$rules);
		$cv_id = Cv::find($cv);
		if ($v->passes()){

		$exp = new CvExp;
		$exp->pos= Input::get('pos');
		$exp->com_name = Input::get('com_name');
		$exp->com_sec = Input::get('com_sec');
		$exp->workspace = Input::get('workspace');
		$exp->com_role = Input::get('com_role');
		$exp->work_style = Input::get('work_style');
		$exp->ulke = Input::get('ulke');
		$exp->sehir = Input::get('sehir');
		$exp->start_day = Input::get('start_day');
		$exp->end_day = Input::get('end_day');
		$exp->cv_id = $cv_id;
		$exp->user_id = Auth::user()->id;
		$exp->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$adsInfo = AdsInfo::find($id);
		$ads = Ads::find($id);

		return View::make('cv.create-resume')->with('adsInfo',$adsInfo)->with('ads',$ads);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ads = AdsInfo::find($id);
		if(is_null($ads)){
			return Redirect::route('ilan.adsInfo');
		}
		return View::make('ilan.edit2')->with('ads',$ads);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$v = Validator::make($input, CvExp::$rules);
		$cv_id = Cv::where('user_id','=',Auth::user()->id)->where('id',$id)->first();
		if ($v->passes()){
			if($cv_id->rate == 0){
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => 10));
			}elseif ($cv_id->rate = 10) {
					$rate = $cv_id->rate + 5;
					DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rate));
				}

		$exp = new CvExp;
		$exp->pos= Input::get('pos');
		$exp->com_name = Input::get('com_name');
		$exp->com_sec = Input::get('com_sec');
		$exp->workspace = Input::get('workspace');
		$exp->com_role = Input::get('com_role');
		$exp->work_style = Input::get('work_style');
		$exp->ulke = Input::get('ulke');
		$exp->sehir = Input::get('sehir');
		$exp->start_day = Input::get('start_day');
		$exp->end_day = Input::get('end_day');
		$exp->cv_id = $cv_id->id;
		$exp->user_id = Auth::user()->id;
		$exp->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    if (Request::ajax()) {
	        try {
		            $exp = CvExp::findOrFail($id);
		            $exp->delete();
		            return Response::json(['message' => 'Ürün silindi']);
	        	} catch (Exception $e) {
	            return Response::json(['message' => 'Ürün bulunamadı!']);
	        }
	    }
	}


}
