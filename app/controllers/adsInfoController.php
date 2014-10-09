<?php

class AdsInfoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /adsinfo
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('ilan.adsInfo');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adsinfo/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ilan.adsInfo');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adsinfo
	 *
	 * @return Response
	 */
	

	/**
	 * Display the specified resource.
	 * GET /adsinfo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$adsInfo = AdsInfo::find($id);
		$ads = Ads::find($id);

		return View::make('Ads.show')->with('adsInfo',$adsInfo)->with('ads',$ads);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /adsinfo/{id}/edit
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
	 * PUT /adsinfo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array(Input::all(),'_method');
		$v = Validator::make($input, Ads::$rules);
		if($v->passes()){
			AdsInfo::find($id)->update($input);
			return Redirect::route('ilan.adsInfo');
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /adsinfo/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		AdsInfo::find($id)->delete();
		return Redirect::back()->withInput()->with('success', 'Group Created Successfully.');
	}

}