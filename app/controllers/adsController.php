<?php

class AdsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ads
	 *
	 * @return Response
	 */
	public function index()
	{
		$ads = Ads::orderBy('created_at','DESC')->paginate(3);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ads/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ilan.ads');
	}

	
	public function show($user_id)
	{
		$ads = Ads::find($id);

		return View::make('ilan.preview')->with('ads',$ads);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ads/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ads = Ads::find($id);
		if(is_null($ads)){
			return Redirect::route('ilan.ads');
		}
		return View::make('ilan.PreEdit')->with('ads',$ads);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /ads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(),'_method');

		$v = Validator::make($input, Ads::$rules);

		if($v->passes()){
			Post::find($id)->update($input);
			return Redirect::route('ilan.ads');
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ads/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ads::find($id)->delete();

		return Redirect::route('./');
	}


}