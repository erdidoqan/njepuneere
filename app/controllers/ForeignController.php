<?php

class ForeignController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /foreign
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /foreign/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /foreign
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Foreign::$rules);
		$cv_id = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->first();
		if ($v->passes()){

		$foreign = new Foreign;
		$foreign->languages= Input::get('languages');
		$foreign->reading = Input::get('reading');
		$foreign->writing = Input::get('writing');
		$foreign->speaking = Input::get('speaking');
		$foreign->learned = Input::get('learned');
		$foreign->cv_id = $cv_id->id;
		$foreign->user_id = Auth::user()->id;
		$foreign->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /foreign/{id}
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
	 * GET /foreign/{id}/edit
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
	 * PUT /foreign/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$v = Validator::make($input, Foreign::$rules);
		$cv_id = Cv::where('user_id','=',Auth::user()->id)->where('id',$id)->first();
		if ($v->passes()){
			if($cv_id->rate <= 45){
				$rate = $cv_id->rate + 10;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rate));
			}elseif ($cv_id->rate == 55) {
				$rateUP = $cv_id->rate + 5;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rateUP));
			}

		$foreign = new Foreign;
		$foreign->languages= Input::get('languages');
		$foreign->reading = Input::get('reading');
		$foreign->writing = Input::get('writing');
		$foreign->speaking = Input::get('speaking');
		$foreign->learned = Input::get('learned');
		$foreign->cv_id = $cv_id->id;
		$foreign->user_id = Auth::user()->id;
		$foreign->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /foreign/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Request::ajax()) {
	        try {
		            $foreign = Foreign::findOrFail($id);
		            $foreign->delete();
		            return Response::json(['message' => 'Ürün silindi']);
	        	} catch (Exception $e) {
	            return Response::json(['message' => 'Ürün bulunamadı!']);
	        }
	    }
	}

}