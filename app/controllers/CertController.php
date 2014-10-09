<?php

class CertController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /cert
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cert/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cert
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Cert::$rules);
		$cv_id = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->first();
		if ($v->passes()){
			

		$cert = new Cert;
		$cert->cer_work = Input::get('cer_work');
		$cert->cer_name = Input::get('cer_name');
		$cert->cer_com = Input::get('cer_com');
		$cert->cer_year = Input::get('cer_year');
		$cert->cv_id = $cv_id->id;
		$cert->user_id = Auth::user()->id;
		$cert->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /cert/{id}
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
	 * GET /cert/{id}/edit
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
	 * PUT /cert/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$v = Validator::make($input, Cert::$rules);
		$cv_id = Cv::where('user_id','=',Auth::user()->id)->where('id',$id)->first();
		if ($v->passes()){
			if($cv_id->rate <= 75){
				$rate = $cv_id->rate + 10;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rate));
			}elseif ($cv_id->rate == 85) {
				$rateUP = $cv_id->rate + 5;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rateUP));
			}

		$cert = new Cert;
		$cert->cer_work = Input::get('cer_work');
		$cert->cer_name = Input::get('cer_name');
		$cert->cer_com = Input::get('cer_com');
		$cert->cer_year = Input::get('cer_year');
		$cert->cv_id = $cv_id->id;
		$cert->user_id = Auth::user()->id;
		$cert->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /cert/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Request::ajax()) {
	        try {
		            $cert = Cert::findOrFail($id);
		            $cert->delete();
		            return Response::json(['message' => 'Ürün silindi']);
	        	} catch (Exception $e) {
	            return Response::json(['message' => 'Ürün bulunamadı!']);
	        }
	    }
	}

}