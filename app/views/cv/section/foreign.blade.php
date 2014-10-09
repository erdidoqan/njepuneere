
	    	<div style="display: none;" id="form-languages">
	    			{{ Form::model($cv, array('method' =>'PATCH' , 'route' => array('foreign.update', $cv->id),'id'=>'smart-form-register','class'=>'smart-form')) }}
			            <fieldset>
			                <div class="row">
			                    <section class="col col-4">
			                    <label>Foreign Language *</label>
			                        <label class="input">
			                            <label class="select">
			                                {{Form::languages()}} <i></i> 
			                            </label>
			                        </label>
			                    </section>
			                    <section class="col col-2">
			                    <label>Reading *</label>
			                        <label class="input">
			                            <label class="select">
			                            	{{Form::reading()}} <i></i> 
			                            </label>
			                        </label>
			                    </section>
			                    <section class="col col-2">
			                    <label>Writing *</label>
			                        <label class="input">
			                            <label class="select">
			                            	{{Form::writing()}} <i></i> 
			                            </label>
			                        </label>
			                    </section>
			                    <section class="col col-2">
			                    <label>Speaking *</label>
				                    <label class="input">
			                            <label class="select">
			                            	{{Form::speaking()}} <i></i> 
			                            </label>
			                    	</label>
			                    </section>
			                </div>
			                <div class="row">
			            	<section class="col col-4">
			                    <label>Learned Institution / Location *</label>
			                        <label class="input">
			                            <label class="select">
			                                 {{ Form::text('learned', '') }}
			                            </label>
			                        </label>
			                    </section>
			            	</div>
			            </fieldset>

			            	<footer>
					            <button type="submit" id="foreigna" class="btn btn-success">
					                 <i class="glyphicon glyphicon-save"></i> Save
					            </button>
					            <a href="#" id="languageskapa" class="btn btn-danger">
					                  Cancel
					            </a>
			        		</footer>
					{{Form::close()}}
	    	</div>
@if($cv_foreign->count())
	<div class="col-sm-12">
	@foreach($cv_foreign as $foreign)
		<h4 class="txt-color-red"><strong>{{ ucwords($foreign->languages) }}</strong> <small>({{ucwords($foreign->learned)}})</small> </h4>
		<span> Reading ({{ucwords($foreign->reading)}})</span>,<span> Writing ({{$foreign->writing}}) </span>,<span> Speaking ({{$foreign->speaking}}) </span>
		<div class="right"><a class="btn btn-xs btn-danger" id="foreign-del" href="{{ route('foreign.destroy',array($foreign->id)) }}"> <i class="glyphicon glyphicon-trash"></i></a></div>
	<hr>
	@endforeach
	</div>
@endif