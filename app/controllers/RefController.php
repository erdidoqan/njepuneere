<?php

class RefController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ref
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ref/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ref
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, CvRef::$rules);
		$cv_id = DB::table('tbl_new_cv')->where('user_id','=',Auth::user()->id)->orderBy('id','DESC')->first();

		if ($v->passes()){

		$ref = new CvRef;
		$ref->namesname= Input::get('namesname');
		$ref->com_name = Input::get('com_name');
		$ref->role_com = Input::get('role_com');
		$ref->p_contact = Input::get('p_contact');
		$ref->email = Input::get('email');
		$ref->cv_id = $cv_id->id;
		$ref->user_id = Auth::user()->id;
		$ref->save();

		return Redirect::to('create-resume');
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /ref/{id}
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
	 * GET /ref/{id}/edit
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
	 * PUT /ref/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$v = Validator::make($input, CvRef::$rules);
		$cv_id = Cv::where('user_id','=',Auth::user()->id)->where('id',$id)->first();

		if ($v->passes()){
			if($cv_id->rate <= 90){
				$rate = $cv_id->rate + 10;
				DB::table('tbl_new_cv')->where('id','=',$cv_id->id)->update(array('rate' => $rate));
			}

		$ref = new CvRef;
		$ref->namesname= Input::get('namesname');
		$ref->com_name = Input::get('com_name');
		$ref->role_com = Input::get('role_com');
		$ref->p_contact = Input::get('p_contact');
		$ref->email = Input::get('email');
		$ref->cv_id = $cv_id->id;
		$ref->user_id = Auth::user()->id;
		$ref->save();

		return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ref/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Request::ajax()) {
	        try {
		            $ref = CvRef::findOrFail($id);
		            $ref->delete();
		            return Response::json(['message' => 'Ürün silindi']);
	        	} catch (Exception $e) {
	            return Response::json(['message' => 'Ürün bulunamadı!']);
	        }
	    }
	}

}