<?php

class CompeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /compe
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /compe/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /compe
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Compe::$rules);
		$cv_id = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->first();
		if ($v->passes()){

		$compe = new Compe;
		$compe->compe_name= Input::get('compe_name');
		$compe->exp = Input::get('exp');
		$compe->exprience = Input::get('exprience');
		$compe->cv_id = $cv_id->id;
		$compe->user_id = Auth::user()->id;
		$compe->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /compe/{id}
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
	 * GET /compe/{id}/edit
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
	 * PUT /compe/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$v = Validator::make($input, Compe::$rules);
		$cv_id = Cv::where('user_id','=',Auth::user()->id)->where('id',$id)->first();
		if ($v->passes()){
			if($cv_id->rate <= 60){
				$rate = $cv_id->rate + 10;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rate));
			}elseif ($cv_id->rate == 70) {
				$rateUP = $cv_id->rate + 5;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rateUP));
			}

		$compe = new Compe;
		$compe->compe_name= Input::get('compe_name');
		$compe->exp = Input::get('exp');
		$compe->exprience = Input::get('exprience');
		$compe->cv_id = $cv_id->id;
		$compe->user_id = Auth::user()->id;
		$compe->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /compe/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Request::ajax()) {
	        try {
		            $compe = Compe::findOrFail($id);
		            $compe->delete();
		            return Response::json(['message' => 'Ürün silindi']);
	        	} catch (Exception $e) {
	            return Response::json(['message' => 'Ürün bulunamadı!']);
	        }
	    }
	}

}