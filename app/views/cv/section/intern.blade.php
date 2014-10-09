
	    	<div style="display: none;" id="form-intern">
	    			{{ Form::model($cv, array('method' =>'PATCH' , 'route' => array('intern.update', $cv->id),'id'=>'smart-form-register','class'=>'smart-form')) }}
            <fieldset>
            @if($errors->any())
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ implode('', $errors->all('<p class="error">:message</p>')) }}
                </div>
            @endif
                <div class="row">
                    <section class="col col-4">
                    <label>Position Name*</label>
                        <label class="input">
                            {{ Form::text('pos', '') }}
                        </label>
                    </section>
                    <section class="col col-4">
                    <label>Company Name *</label>
                        <label class="input">
                            {{ Form::text('com_name', '') }}
                        </label>
                    </section>
                    <section class="col col-4">
                    <label>Company Sector *</label>
                        <label class="input">
                            {{ Form::text('com_sec', '') }}
                        </label>
                    </section>
                </div>
                <div class="row">
                    <section class="col col-4">
                    <label>Country *</label>
                        <label class="input">
                            <label class="select">
                                {{Form::ulke()}} <i></i> 
                            </label>
                        </label>
                    </section>
                    <section class="col col-4">
                    <label>City *</label>
                        <label class="input">
                            <label class="select">
                            	{{Form::sehir()}} <i></i> 
                            </label>
                        </label>
                    </section>
                    <section class="col col-4">
                    <label>Period *</label>
                        <label class="input">
                            {{ Form::text('period', '') }}
                        </label>
                    </section>
                </div>
            </fieldset>
            	<footer>
		            <button type="submit" id="interna" class="btn btn-success">
		                 <i class="glyphicon glyphicon-save"></i> Save
		            </button>
		            <a href="#" id="internkapa" class="btn btn-danger">
		                  Cancel
		            </a>
        		</footer>
			{{Form::close()}}
	    	</div>

@if($cv_intern->count())
    <div class="col-sm-12">
        @foreach($cv_intern as $intern)
                <h4 class="txt-color-red"><strong>{{ ucwords($intern->pos) }}</strong> <small>({{ucwords($intern->period)}})</small> </h4>
                <span><strong> {{ucwords($intern->com_name)}} </strong></span>,<span> {{$intern->sehir}} </span>
                <div class="right"><a class="btn btn-xs btn-danger" id="intern-del" href="{{ route('intern.destroy',array($intern->id)) }}"> <i class="glyphicon glyphicon-trash"></i></a></div>
            <hr>
        @endforeach
    </div>
@endif