<?php

class InternController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /intern
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /intern/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /intern
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Intern::$rules);
		$cv_id = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->first();
		if ($v->passes()){

		$intern = new Intern;
		$intern->pos= Input::get('pos');
		$intern->com_name = Input::get('com_name');
		$intern->com_sec = Input::get('com_sec');
		$intern->ulke = Input::get('ulke');
		$intern->sehir = Input::get('sehir');
		$intern->period = Input::get('period');
		$intern->cv_id = $cv_id->id;
		$intern->user_id = Auth::user()->id;
		$intern->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /intern/{id}
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
	 * GET /intern/{id}/edit
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
	 * PUT /intern/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$v = Validator::make($input, Intern::$rules);
		$cv_id = Cv::where('user_id','=',Auth::user()->id)->where('id',$id)->first();
		if ($v->passes()){
			if($cv_id->rate <= 30){
				$rate = $cv_id->rate + 10;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rate));
			}elseif ($cv_id->rate == 40) {
				$rateUP = $cv_id->rate + 5;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rateUP));
			}

		$intern = new Intern;
		$intern->pos= Input::get('pos');
		$intern->com_name = Input::get('com_name');
		$intern->com_sec = Input::get('com_sec');
		$intern->ulke = Input::get('ulke');
		$intern->sehir = Input::get('sehir');
		$intern->period = Input::get('period');
		$intern->cv_id = $cv_id->id;
		$intern->user_id = Auth::user()->id;
		$intern->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /intern/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Request::ajax()) {
	        try {
		            $intern = Intern::findOrFail($id);
		            $intern->delete();
		            return Response::json(['message' => 'Ürün silindi']);
	        	} catch (Exception $e) {
	            return Response::json(['message' => 'Ürün bulunamadı!']);
	        }
	    }
	}

}