<?php

class CvController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /cv
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cv/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cv
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$v = Validator::make($input, Cv::$rules);

		if ($v->passes()){

		$cv = new Cv;
		$cv->resume_name= Input::get('resume_name');
		$cv->languages = Input::get('languages');
		$cv->user_id = Auth::user()->id;
		$cv->save();

		return Redirect::to('create-resume');
		}
		return Redirect::back()->withErrors($v);
	}

	/**
	 * Display the specified resource.
	 * GET /cv/{id}
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
	 * GET /cv/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$input = array_except(Input::all(), '_method');

		$v = Validator::make($input, Cv::$rules);

		if($v->passes())
		{
			Cv::find($id)->update($input);
			return Redirect::back();
		}

		return Redirect::back()->withErrors($v);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /cv/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /cv/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (Request::ajax()) {
		
	        try {
	        		$CvExp = CvExp::where('cv_id','=',$id);
		            $CvExp->delete();
		            $CvEdu = CvEdu::where('cv_id','=',$id);
		            $CvEdu->delete();
		            $intern = Intern::where('cv_id','=',$id);
		            $intern->delete();
		            $foreign = Foreign::where('cv_id','=',$id);
		            $foreign->delete();
		            $compe = Compe::where('cv_id','=',$id);
		            $compe->delete();
		            $cert = Cert::where('cv_id','=',$id);
		            $cert->delete();
		            $ref = CvRef::where('cv_id','=',$id);
		            $ref->delete();
		            $cv = Cv::findOrFail($id);
		            $cv->delete();
		            return Response::json(['message' => 'Ürün silindi']);
	        	} catch (Exception $e) {
	            return Response::json(['message' => 'Ürün bulunamadı!']);
	        }
	    }

		
	}
	public function cvstatus(){
		$post = Input::all();
		$rules = array('cv_id'=>'required|numeric','status'=>'required|numeric');
		$validator = Validator::make($post,$rules);
		if(!$validator->fails()){
			try{
				$cv = Cv::where('user_id','=',Auth::user()->id)->update(array('status' => 0));
		    	$cv = Cv::where('id' , '=', $post['cv_id'])->update(array('status'=>$post['status']));
		    	$res['err'] = 0;
		    	$res['msg'] = "Güncelleme işlemi başarılı";
		    }catch(\Exception $e){
		    	$res['err'] = 1;
		    	$res['msg'] = "Güncelleme işlemi başarısız";
		    	$res['err_msg'] = $e->getMessage();
		    } 
		}else{
			$res['err'] = 1;
			$res['msg'] = "Eksik / Hatalı Parametre";
		}
		return Response::json($res);
	}

}