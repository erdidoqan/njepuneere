<div style="display: none;" id="form-competencies">
	    			{{ Form::model($cv, array('method' =>'PATCH' , 'route' => array('compe.update', $cv->id),'id'=>'smart-form-register','class'=>'smart-form')) }}

			            <fieldset>
			                <div class="row">
			                    <section class="col col-4">
			                    <label>Competencies Name *</label>
			                        <label class="input">
			                            <label class="select">
			                                {{ Form::text('compe_name', '') }}
			                            </label>
			                        </label>
			                    </section>
			                    <section class="col col-4">
			                    <label>Experience *</label>
			                        <label class="input">
			                            <label class="select">
			                                {{Form::exp()}} <i></i> 
			                            </label>
			                        </label>
			                    </section>
			                    <section class="col col-4">
			                    <label>Experience *</label>
			                        <label class="input">
			                            <label class="select">
			                                {{Form::exprience()}} <i></i> 
			                            </label>
			                        </label>
			                    </section>
			                </div>
			            </fieldset>

			            	<footer>
					            <button type="submit" id="competency" class="btn btn-success">
					                 <i class="glyphicon glyphicon-save"></i> Save
					            </button>
					            <a href="#" id="competencieskapa" class="btn btn-danger">
					                  Cancel
					            </a>
			        		</footer>
					{{Form::close()}}
	    	</div>
	    	@if($cv_compe->count())
	    		<hr><div class="col-sm-12">
		  		@foreach($cv_compe as $compe)
						<span class="txt-color-redLight"><strong>{{ ucwords($compe->compe_name) }}</strong></span>
						<a class="btn btn-xs btn-danger" id="competency-del" href="{{ route('compe.destroy',array($compe->id)) }}"> <i class="glyphicon glyphicon-trash"></i></a>

		  		@endforeach
		  		</div><hr><hr>
		  	@endif