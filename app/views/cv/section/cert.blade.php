

	    	<div style="display: none;" id="form-Certificates">
	    			{{ Form::model($cv, array('method' =>'PATCH' , 'route' => array('cert.update', $cv->id),'id'=>'smart-form-register','class'=>'smart-form')) }}
			            <fieldset>
			                <div class="row">
			                    <section class="col col-4">
			                    <label>Certification Workspace *</label>
			                        <label class="input">
			                            <label class="select">
			                                {{ Form::text('cer_work', '') }}
			                            </label>
			                        </label>
			                    </section>
			                    <section class="col col-4">
			                    <label>Name *</label>
			                        <label class="input">
			                            <label class="select">
			                                {{ Form::text('cer_name', '') }}
			                            </label>
			                        </label>
			                    </section>
			                    <section class="col col-4">
			                    <label>Company *</label>
			                        <label class="input">
			                            <label class="select">
			                                {{ Form::text('cer_com', '') }}
			                            </label>
			                        </label>
			                    </section>
			                    <section class="col col-4">
			                    <label>Year *</label>
			                        <label class="input">
			                            <label class="select">
			                                {{ Form::text('cer_year', '') }}
			                            </label>
			                        </label>
			                    </section>
			                </div>
			            </fieldset>

			            	<footer>
					            <button type="submit" id="certi" class="btn btn-success">
					                 <i class="glyphicon glyphicon-save"></i> Save
					            </button>
					            <a href="#" id="Certificateskapa" class="btn btn-danger">
					                  Cancel
					            </a>
			        		</footer>
					{{Form::close()}}
	    	</div>

	    	@if($cv_cert->count())
		  		<div class="col-sm-12">
		  		@foreach($cv_cert as $cert)
						<h4 class="txt-color-red"><strong>{{ ucwords($cert->cer_name) }}</strong> <small>({{ucwords($cert->cer_year)}})</small> </h4>
						<span> {{ucwords($cert->cer_work)}}</span>,<span>{{$cert->cer_com}} </span>
						<div class="right"><a class="btn btn-xs btn-danger" id="certi-del" href="{{ route('cert.destroy',array($cert->id)) }}"> <i class="glyphicon glyphicon-trash"></i></a></div>
						
					<hr>
		  		@endforeach
		  		</div>
		  	@endif