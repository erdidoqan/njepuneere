<?php

class ApplyController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /apply
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /apply/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /apply
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Apply::$rules);
		if ($v->passes())
		{
			
			$apply = new Apply;
			$apply->apply = Input::get('apply');
			$apply->adsInfo_id = Input::get('adsInfo');
			$apply->ads_id = Input::get('ads');
			$apply->user_id = Auth::user()->id;
			$apply->sirket_id = Input::get('sirket_id');
			$apply->save();

			return Redirect::back();
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /apply/{id}
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
	 * GET /apply/{id}/edit
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
	 * PUT /apply/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /apply/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}