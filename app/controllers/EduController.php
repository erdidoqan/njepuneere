<?php

class EduController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /edu
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /edu/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /edu
	 *
	 * @return Response
	 */
	
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, CvEdu::$rules);
		$cv_id = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->first();
		if ($v->passes()){

		$edu = new CvEdu;
		$edu->edu_level= Input::get('edu_level');
		$edu->school_name = Input::get('school_name');
		$edu->department = Input::get('department');
		$edu->ulke = Input::get('ulke');
		$edu->sehir = Input::get('sehir');
		$edu->gra_date = Input::get('gra_date');
		$edu->gra_deg = Input::get('gra_deg');
		$edu->cv_id = $cv_id->id;
		$edu->user_id = Auth::user()->id;
		$edu->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /edu/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /edu/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /edu/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$v = Validator::make($input, CvEdu::$rules);
		$cv_id = Cv::where('user_id','=',Auth::user()->id)->where('id',$id)->first();
		if ($v->passes()){
			if($cv_id->rate <= 15){
				$rate = $cv_id->rate + 10;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rate));
			}elseif ($cv_id->rate == 25) {
				$rateUP = $cv_id->rate + 5;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rateUP));
			}

		$edu = new CvEdu;
		$edu->edu_level= Input::get('edu_level');
		$edu->school_name = Input::get('school_name');
		$edu->department = Input::get('department');
		$edu->ulke = Input::get('ulke');
		$edu->sehir = Input::get('sehir');
		$edu->gra_date = Input::get('gra_date');
		$edu->gra_deg = Input::get('gra_deg');
		$edu->cv_id = $cv_id->id;
		$edu->user_id = Auth::user()->id;
		$edu->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /edu/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	    if (Request::ajax()) {
	        try {
		            $edu = CvEdu::findOrFail($id);
		            $edu->delete();
		            return Response::json(['message' => 'Ürün silindi']);
	        	} catch (Exception $e) {
	            return Response::json(['message' => 'Ürün bulunamadı!']);
	        }
	    }
	}
}



